<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
	
    public function dashboard_1()
    {
      
     
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $action = __FUNCTION__;
		
        return view('dashboard.index', compact('page_title', 'page_description','action','logo','logoText'));
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
