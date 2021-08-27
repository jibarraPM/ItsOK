<?php

namespace App\Http\Controllers\Usuario;

use Illuminate\Http\Request;
use Transbank\Webpay\WebpayPlus;
use Transbank\Webpay\WebpayPlus\Transaction;
use Illuminate\Support\Facades\Auth;

use App\Models\Compra;
use App\Models\Restaurante;
use Cart;

class WebpayPlusController extends Controller
{
    public function __construct(){
        if (app()->environment('production')) {
            WebpayPlus::configureForProduction(config('services.transbank.webpay_plus_cc'), config('services.transbank.webpay_plus_api_key'));
        } else {
            WebpayPlus::configureForTesting();
        }
    }

    public function createdTransaction(Request $request)
    {
        $req = $request->except('_token');
        

        $user = Auth::user();

        $compra = new Compra();
        $compra->session_id = $user->id;
        $compra->buy_order = $this->generateRandomNumber();
        $compra->amount = (int) $req['total'];
        $compra->status = 0;
        $compra->save();

        $return_url = "http://127.0.0.1:8000/usuario/recibo";

        $resp = (new Transaction)->create($compra["buy_order"], $compra["session_id"], $compra["amount"], $return_url);

        $url = $resp->url;
        $dataForPost = array('token_ws'=>$resp->token);
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($dataForPost),
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return $result;
    }

    public function commitTransaction(Request $request)
    {
        $req = $request->except('_token');
        $resp = (new Transaction)->commit($req["token_ws"]);

        return view('webpayplus/transaction_committed', ["resp" => $resp, 'req' => $req]);
    }


    public function showRefund()
    {
        return view('webpayplus/refund');
    }

    public function refundTransaction(Request $request)
    {
        $req = $request->except('_token');

        $resp = (new Transaction)->refund($req["token"], $req["amount"]);

        return view('webpayplus/refund_success', ["resp" => $resp]);
    }

    public function recibo(request $request)
    {
        $resp = (new Transaction)->status($request->token_ws);

        $page_title = 'Detalle Recibo';
        $page_description = 'Detalle del Recibo';
		
		$action = __FUNCTION__;

        $user = Auth::user();
        unset($user['password']);

        $carts = Cart::session($user->id)->getContent();
        $restaurante = Restaurante::find($carts[1]->associatedModel->idRestaurante);
        $cantidad = 0;
        $subTotal = 0;
        $cobroPorServicio = 0;
        $total = 0;
        foreach ($carts as $item) {
            $cantidad = $cantidad + $item->quantity;
            $subTotal = $subTotal + $item->quantity*$item->price;
        }
        $cobroPorServicio = $subTotal*0.1;
        $total = $subTotal + $cobroPorServicio;

        $compra = Compra::where('buy_order', $resp->buyOrder)->get();
        $compra = $compra[0];

        if($resp->vci == "TSY"){
            $compra->status = 1;
        }else{
            $compra->status = 2;
        }
        $compra->save();

        $data = [
            'carts' => $carts,
            'cantidad' => $cantidad,
            'subTotal' => $subTotal,
            'cobroPorServicio' => $cobroPorServicio,
            'total' => $total,
            'compra' => $compra,
            'user' => $user,
            'restaurante' => $restaurante
        ];

        return view('usuario.recibo',compact('page_title', 'page_description','action', 'data') );
    }

    public function generateRandomNumber($length = 8)
    {
        $random = "";
        srand((double) microtime() * 1000000);

        $data = "123456123456789071234567890890";
        // $data .= "aBCdefghijklmn123opq45rs67tuv89wxyz"; // if you need alphabatic also

        for ($i = 0; $i < $length; $i++) {
                $random .= substr($data, (rand() % (strlen($data))), 1);
        }

        return $random;

    }
}