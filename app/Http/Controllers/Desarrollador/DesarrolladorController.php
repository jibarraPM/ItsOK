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
      
     
        $page_title = 'Inicio Perfil Desarrollo';
        $page_description = 'En este perfil se podra acceder a todo el contenido del sistema';
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
        $page_title = 'Registrar Local';
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
    public function recibo()
    {
        $page_title = 'Detalle Recibo';
        $page_description = 'Detalle del Recibo';
		
		$action = __FUNCTION__;

        return view('Desarrollador.recibo',compact('page_title', 'page_description','action') );
    }
    public function menus_lista()
    {
        $page_title = 'Menus Disponibles';
        $page_description = 'Menus ingresados en el sistema';
		
        $menus = Menu::all();

        $data = [
            'menus' => $menus,
        ];

		$action = __FUNCTION__;

        return view('Desarrollador.menus_lista',compact('page_title', 'page_description','action', 'data'));
    }

    public function perfil_desarrollo()
    {
        $page_title = 'Perfil del desarrollador';
        $page_description = 'En este perfil encontraras tu informacion personal y los distintos restaurantes ingresados en el sistema';
		
		$action = __FUNCTION__;

        return view('Desarrollador.perfil_desarrollo',compact('page_title', 'page_description','action') );
    }
    public function index_local()
    {
        $page_title = 'Index Local';
        $page_description = 'En esta pagina encontraras la información resumida del local seleccionado';
		
		$action = __FUNCTION__;

        return view('Desarrollador.index_local',compact('page_title', 'page_description','action') );
    }
    public function categorias_local_lista()
    {
        $page_title = 'Categoria Local';
        $page_description = 'En esta pagina encontraras la información resumida del local seleccionado';
		
		$action = __FUNCTION__;

        $menus = Menu::all();

        $data = [
            'menus' => $menus,
        ];

        return view('Desarrollador.categorias_local_lista',compact('page_title', 'page_description','action') );
    }
    public function categorias_global_lista()
    {
        $page_title = 'Categoria Local';
        $page_description = 'En esta pagina encontraras la información resumida del local seleccionado';
		
		$action = __FUNCTION__;

        $menus = Menu::all();

        $data = [
            'menus' => $menus,
        ];

        return view('Desarrollador.categorias_global_lista',compact('page_title', 'page_description','action') );
    }

    public function atenciones_lista()
    {
        $page_title = 'Atenciones';
        $page_description = 'Menus ingresados en el sistema';
		
		$action = __FUNCTION__;

        return view('Desarrollador.atenciones_lista',compact('page_title', 'page_description','action') );
    }
    public function clientes_lista()
    {
        $page_title = 'Lista de Clientes';
        $page_description = 'Clientes ingresados en el sistema';
		
		$action = __FUNCTION__;

        return view('Desarrollador.clientes_lista',compact('page_title', 'page_description','action') );
    }
    public function atenciones_local_lista()
    {
        $page_title = 'Atenciones';
        $page_description = 'Menus ingresados en el sistema';
		
		$action = __FUNCTION__;

        return view('Desarrollador.atenciones_lista',compact('page_title', 'page_description','action') );
    }

}


