<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Usuario\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Cart;

use Validator;

class CartController extends Controller
{

    /**
     * Pagina principal de restaurante
     * Se debe mostrar la lista de restaurantes del sistema
     */
    public function index(){

        $page_title = 'Detalle Pedido';
        $page_description = 'Detalle del Pedido';
		
		$action = __FUNCTION__;

        $user = Auth::user();

        $carts = Cart::session($user->id)->getContent();
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

        $data = [
            'carts' => $carts,
            'cantidad' => $cantidad,
            'subTotal' => $subTotal,
            'cobroPorServicio' => $cobroPorServicio,
            'total' => $total
        ];

        return view('Usuario.Cart.index',compact('page_title', 'page_description','action', 'data') );

    }

    /**
     * Pagina para crear restaurante
     * Se debe tener el formulario para crear un restaurante
     */
    public function create(){
        
    }

    /**
     * Logica que permite registrar un restaurante en la base de datos
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $menu = Menu::find($request->id);
        
        Cart::session($user->id)->add(array(
            'id' => $menu->id,
            'name' => $menu->nombre,
            'price' => $menu->precio,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $menu
        ));

        $page_title = 'Detalle Pedido';
        $page_description = 'Detalle del Pedido';
		
		$action = __FUNCTION__;


        $this->index();
    }

    /**
     * Pagina principal de restaurante
     * Se debe mostrar la lista de restaurantes del sistema
     */
    public function show(Menu $menu){
        
    }

    /**
     * Logica que permite registrar un restaurante en la base de datos
     */
    public function edit(Menu $menu)
    {
        

    }

    /**
     * Logica que permite registrar un restaurante en la base de datos
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        \Cart::session($user->id)->update($request->id ,[
            'quantity' => $request->quantity,
            'price' => $request->price
        ]);
    }

    /**
     * Logica que permite registrar un restaurante en la base de datos
     */
    public function destroy(Request $request)
    {
        $user = Auth::user();

        \Cart::session($user->id)->remove($request->id);
    }
}