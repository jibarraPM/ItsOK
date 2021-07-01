<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Atencion;
use App\Models\User;

class PedidoController extends Controller
{

    /**
     * Pagina principal de restaurante
     * Se debe mostrar la lista de restaurantes del sistema
     */
    public function index(){

    }

    /**
     * Pagina para crear restaurante
     * Se debe tener el formulario para crear un restaurante
     */
    public function create(){
        $page_title = 'Detalle Pedido';
        $page_description = 'Detalle del Pedido';
		
		$action = __FUNCTION__;

        return view('Desarrollador.pedido',compact('page_title', 'page_description','action') );
    }

    /**
     * Logica que permite registrar un restaurante en la base de datos
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Pagina principal de restaurante
     * Se debe mostrar la lista de restaurantes del sistema
     */
    public function show(){
        
    }

    /**
     * Logica que permite registrar un restaurante en la base de datos
     */
    public function edit(Request $request)
    {

    }

    /**
     * Logica que permite registrar un restaurante en la base de datos
     */
    public function update(Request $request)
    {

    }

    /**
     * Logica que permite registrar un restaurante en la base de datos
     */
    public function destroy(Request $request)
    {

    }
}