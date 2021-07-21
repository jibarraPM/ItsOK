<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Menu;
use App\Models\Atencion;
use App\Models\User;
use App\Models\CategoriaRestaurante;
use App\Models\CategoriaGlobal;
use App\Models\Agregado;

class MenuController extends Controller
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
        $page_title = 'Form Element';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        $categoriasLocal = CategoriaRestaurante::all();
        $categoriasGlobal = CategoriaGlobal::all();
        $agregados = Agregado::all();

        $data = [
            'categoriasLocal' => $categoriasLocal,
            'categoriasGlobal' => $categoriasGlobal,
            'agregados' => $agregados,
        ];

        return view('Desarrollador.agregar_producto',compact('page_title', 'page_description','action', 'data') );
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
    public function show(Menu $menu){
        $page_title = 'Detalle Productos';
        $page_description = 'Detalle del productos';
		
		$action = __FUNCTION__;

        $data = [
            'menu' => $menu
        ];

        return view('Desarrollador.menu_mostrar',compact('page_title', 'page_description','action', 'data') );
    }

    /**
     * Logica que permite registrar un restaurante en la base de datos
     */
    public function edit(Request $request)
    {
        $page_title = 'Editar Menu';
        $page_description = 'Detalle del productos';
		
		$action = __FUNCTION__;

        return view('Desarrollador.editar_producto',compact('page_title', 'page_description','action') );

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