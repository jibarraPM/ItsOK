<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Atencion;
use App\Models\User;
use App\Models\Restaurante;

class RestauranteController extends Controller
{

    /**
     * Pagina principal de restaurante
     * Se debe mostrar la lista de restaurantes del sistema
     */
    public function index(){
        $page_title = 'Perfil del desarrollador';
        $page_description = 'En este perfil encontraras tu informacion personal y los distintos restaurantes ingresados en el sistema';
		
		$action = __FUNCTION__;

        $restaurants = Restaurante::all();

        $data = [
            'restaurants' => $restaurants,
        ];

        return view('restaurante.index',compact('page_title', 'page_description','action', 'data') );
    }

    /**
     * Pagina para crear restaurante
     * Se debe tener el formulario para crear un restaurante
     */
    public function create(){
        $page_title = 'Registrar Restaurante';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('restaurante.create',compact('page_title', 'page_description','action') );
    }

    /**
     * Logica que permite registrar un restaurante en la base de datos
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $contact = new Contact([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'job_title' => $request->get('job_title'),
            'city' => $request->get('city'),
            'country' => $request->get('country')
        ]);
        $contact->save();

        $this->create();
    }

    /**
     * Pagina principal de restaurante
     * Se debe mostrar la lista de restaurantes del sistema
     */
    public function show(){
        $page_title = 'Productos Local';
        $page_description = 'Productos Disponibles';
		
		$action = __FUNCTION__;

        return view('Desarrollador.productos_local',compact('page_title', 'page_description','action') );
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