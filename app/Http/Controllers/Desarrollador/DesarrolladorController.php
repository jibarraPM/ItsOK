<?php

namespace App\Http\Controllers\Desarrollador;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Atencion;
use App\Models\User;

class DesarrolladorController extends Controller
{
	
    public function dashboard_1()
    {
      
     
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $action = __FUNCTION__;

        $cantidadMenus = Menu::all()->count();
        $cantidadAtenciones = Atencion::all()->count();
        $valorAtenciones = Atencion::all()->sum('valorAtencion');
		$cantidadUsuario = User::where('role', 3)->count();
        $data = [
            'cantidadMenus' => $cantidadMenus,
            'cantidadAtenciones' => $cantidadAtenciones,
            'valorAtenciones' => $valorAtenciones,
            'cantidadUsuario' => $cantidadUsuario
        ];

        return view('Desarrollador.index', compact('page_title', 'page_description','action','logo','logoText', 'data'));
    }

    public function form_element()
    {
        $page_title = 'Form Element';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('Desarrollador.admin_register', compact('page_title', 'page_description','action'));
    }

    public function agregar_producto()
    {
        $page_title = 'Form Element';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('Desarrollador.agregar_producto',compact('page_title', 'page_description','action') );
    }
    public function agregar_agregado()
    {
        $page_title = 'Form Element';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('Desarrollador.agregar_agregado',compact('page_title', 'page_description','action') );
    }
    public function locales()
    {
        $page_title = 'Locales';
        $page_description = 'Locales Disponibles';
		
		$action = __FUNCTION__;

        return view('Desarrollador.locales',compact('page_title', 'page_description','action') );
    }
    public function productos_local()
    {
        $page_title = 'Productos Local';
        $page_description = 'Productos Disponibles';
		
		$action = __FUNCTION__;

        return view('Desarrollador.productos_local',compact('page_title', 'page_description','action') );
    }
    public function producto_detalle()
    {
        $page_title = 'Detalle Productos';
        $page_description = 'Detalle del productos';
		
		$action = __FUNCTION__;

        return view('Desarrollador.producto_detalle',compact('page_title', 'page_description','action') );
    }
    public function pedido()
    {
        $page_title = 'Detalle Pedido';
        $page_description = 'Detalle del Pedido';
		
		$action = __FUNCTION__;

        return view('Desarrollador.pedido',compact('page_title', 'page_description','action') );
    }

}
