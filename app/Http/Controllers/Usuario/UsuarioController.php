<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Atencion;
use App\Models\User;
use App\Models\Restaurante;
use App\Models\CategoriaRestaurante;
use App\Models\CategoriaGlobal;

class UsuarioController extends Controller
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

        $delivery = Atencion::where('idTipoAtencion', 1)->count();
        $retiro = Atencion::where('idTipoAtencion', 2)->count();
        $local = Atencion::where('idTipoAtencion', 3)->count();
        $nuevasOrdenes = Atencion::where('idEstadoAtencion', 1)->count();
            
        $data = [
            'cantidadMenus' => $cantidadMenus,
            'cantidadAtenciones' => $cantidadAtenciones,
            'valorAtenciones' => $valorAtenciones,
            'cantidadUsuario' => $cantidadUsuario,
            'delivery' => $delivery,
            'retiro' => $retiro,
            'local' => $local,
            'nuevasOrdenes' => $nuevasOrdenes
        ];
		
        return view('dashboard.index', compact('page_title', 'page_description','action','logo','logoText', 'data'));
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

}
