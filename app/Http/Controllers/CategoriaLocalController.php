<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Models\CategoriaLocal;
use App\Models\CategoriaRestaurante;
use App\Models\Atencion;
use App\Models\User;

use Validator;

class CategoriaLocalController extends Controller
{

    /**
     * Pagina principal de restaurante
     * Se debe mostrar la lista de restaurantes del sistema
     */
    public function index(){
        $page_title = 'Categoria Local';
        $page_description = 'En esta pagina encontraras la información resumida del local seleccionado';
		
		$action = __FUNCTION__;

        $categoriasLocal = CategoriaRestaurante::all();

        $data = [
            'categoriasLocal' => $categoriasLocal,
        ];

        return view('categoriaLocal.index',compact('page_title', 'page_description','action', 'data') );
    }

    /**
     * Pagina para crear restaurante
     * Se debe tener el formulario para crear un restaurante
     */
    public function create(){
        $page_title = 'Agregar Categoría Local';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('categoriaLocal.create',compact('page_title', 'page_description','action') );

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
        $page_title = 'Editar Categoría Local';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        return view('categoriaLocal.edit',compact('page_title', 'page_description','action') );

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