<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;

use App\Models\UsuarioRestaurante;
use App\Models\RestauranteMenu;
use App\Models\Atencion;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class AdministradorController extends Controller
{
	
    public function dashboard_1()
    {
     
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        $logo = "images/logo.png";
        $logoText = "images/logo-text.png";
        $action = __FUNCTION__;

        $id = auth()->user()->id;
        
        $restaurantes = UsuarioRestaurante::where('idUsuario', $id)->get();
        $cantidadMenus = 0;
        $cantidadAtenciones = 0;
        $valorAtenciones = 0;
        foreach($restaurantes as $restaurante){
            $cantidadMenus = RestauranteMenu::where('idRestaurante', $restaurante->idRestaurante)->count();
            $cantidadAtenciones = Atencion::where('idRestaurante', $restaurante->idRestaurante)->count();
            $valorAtenciones = Atencion::where('idRestaurante', $restaurante->idRestaurante)->sum('valorAtencion');
        }
        $cantidadUsuario = User::where('role', 3)->count();

        $delivery = Atencion::where('idTipoAtencion', 1)->count();
        $retiro = Atencion::where('idTipoAtencion', 2)->count();
        $local = Atencion::where('idTipoAtencion', 3)->count();


            
        $data = [
            'cantidadMenus' => $cantidadMenus,
            'cantidadAtenciones' => $cantidadAtenciones,
            'valorAtenciones' => $valorAtenciones,
            'cantidadUsuario' => $cantidadUsuario,
            'delivery' => $delivery,
            'retiro' => $retiro,
            'local' => $local
        ];

        return view('Desarrollador.index', compact('page_title', 'page_description','action','logo','logoText', 'data'));
    }

}
