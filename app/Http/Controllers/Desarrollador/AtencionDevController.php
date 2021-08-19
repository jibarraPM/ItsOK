<?php

namespace App\Http\Controllers\Desarrollador;

use App\Http\Controllers\Desarrollador\Controller;
use App\Models\Menu;
use App\Models\Atencion;
use App\Models\User;

class AtencionDevController extends Controller
{

    /**
     * Pagina principal de restaurante
     * Se debe mostrar la lista de restaurantes del sistema
     */
    public function index(){
        $page_title = 'Atenciones';
        $page_description = 'Detalle del Pedido';
		
		$action = __FUNCTION__;

        return view('Desarrollador.atencion.index',compact('page_title', 'page_description','action') );

    }

    /**
     * Pagina para crear restaurante
     * Se debe tener el formulario para crear un restaurante
     */
    public function create(){
        $page_title = 'Detalle Pedido';
        $page_description = 'Detalle del Pedido';
		
		$action = __FUNCTION__;

        return view('Desarrollador.atencion.create',compact('page_title', 'page_description','action') );
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
        $page_title = 'Detalle Pedido';
        $page_description = 'Detalle del Pedido';
		
		$action = __FUNCTION__;

        return view('Desarrollador.atencion.show',compact('page_title', 'page_description','action') );
        
    }

    /**
     * Logica que permite registrar un restaurante en la base de datos
     */
    public function edit(Request $request)
    {
        $page_title = 'Detalle Pedido';
        $page_description = 'Detalle del Pedido';
		
		$action = __FUNCTION__;

        return view('Desarrollador.atencion.edit',compact('page_title', 'page_description','action') );

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