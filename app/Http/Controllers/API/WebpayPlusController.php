<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Transbank\Webpay\WebpayPlus;
use Transbank\Webpay\WebpayPlus\Transaction;
use Illuminate\Support\Facades\Auth;

use App\Models\Compra;
use App\Models\Carrito;
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

        $compra = new Compra();
        $compra->session_id = $req['session_id'];
        $compra->buy_order = $this->generateRandomNumber();
        $compra->amount = (int) $req['amount'];
        $compra->status = 0;
        $compra->save();

        /**
        $carts = Cart::session($user->id)->getContent();
        
        foreach ($carts as $item) {
            $carrito = new Carrito();
            $carrito->nombre = $item->associatedModel->nombre;
            $carrito->descripcion = $item->associatedModel->descripcion;
            $carrito->ingredientes = $item->associatedModel->ingredientes;
            $carrito->precio = $item->associatedModel->precio;
            $carrito->tiempoElavoracion = $item->associatedModel->tiempoElavoracion;
            $carrito->disponible = $item->associatedModel->disponible;
            $carrito->edad18 = $item->associatedModel->edad18;
            $carrito->idRestaurante = $item->associatedModel->idRestaurante;
            $carrito->buy_order = $compra->id;
            $carrito->save();
        }
        */


        $resp = (new Transaction)->create($compra["buy_order"], $compra["session_id"], $compra["amount"], $req['return_url']);

        return response()->json([
            'success' => true,
            'message' => "done",
            'data' => ['transaccion'=>$resp]
        ], 200);
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
        $compra = Compra::where('buy_order', $resp->buyOrder)->get();
        $compra = $compra[0];
        if($resp->vci == "TSY"){
            $compra->status = 1;
        }else{
            $compra->status = 2;
        }
        $compra->save();

        if($compra->status == 1){
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['transaccion'=>'registrada con exito']
            ], 200);
        }else{
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['transaccion'=>'no se logro pagar con exito']
            ], 200);
        }
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