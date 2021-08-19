<?php

namespace App\Http\Controllers\Desarrollador;

use App\Http\Controllers\Desarrollador\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Models\CategoriaGlobal;
use App\Models\Atencion;
use App\Models\User;

class CategoriaGlobalDevController extends Controller
{

    /**
     * Pagina principal de restaurante
     * Se debe mostrar la lista de restaurantes del sistema
     */
    public function index(){
        $page_title = 'Categoria Local';
        $page_description = 'En esta pagina encontraras la información resumida del local seleccionado';
		
		$action = __FUNCTION__;

        $categoriasGlobal = CategoriaGlobal::all();

        $data = [
            'categoriasGlobal' => $categoriasGlobal,
        ];

        return view('Desarrollador.categoriaGlobal.index',compact('page_title', 'page_description','action', 'data') );
    }

    /**
     * Pagina para crear restaurante
     * Se debe tener el formulario para crear un restaurante
     */
    public function create(){
        $page_title = 'Agregar Categoría Local';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('Desarrollador.categoriaGlobal.create',compact('page_title', 'page_description','action') );

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
        $page_title = 'Editar Categoría Global';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        

        return view('Desarrollador.categoriaGlobal.edit',compact('page_title', 'page_description','action') );

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