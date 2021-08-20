<?php

namespace App\Http\Controllers\Desarrollador;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Models\Restaurante;
use App\Models\RestauranteMenu;
use App\Models\Menu;
use App\Models\Atencion;
use App\Models\User;
use App\Models\CategoriaRestaurante;
use App\Models\CategoriaGlobal;
use App\Models\MenuCategoriaGlobal;
use App\Models\Agregado;
use Validator;
use Illuminate\Support\Facades\Redirect;


class MenuDevController extends Controller
{

    /**
     * Pagina principal de restaurante
     * Se debe mostrar la lista de restaurantes del sistema
     */
    public function index($id){

        $page_title = 'Menus';
        $page_description = 'Menus ingresados en el sistema';
		
        $restaurante = Restaurante::where('id', $id)->get();
        $restaurante = $restaurante[0];
        $menus = Menu::where('idRestaurante', $id)->get();
        
        $data = [
            'restaurante'=> $restaurante,
            'menus' => $menus
        ];

		$action = __FUNCTION__;

        return view('desarrollador.menu.index',compact('page_title', 'page_description','action', 'data'));
    }

    /**
     * Pagina para crear restaurante
     * Se debe tener el formulario para crear un restaurante
     */
    public function create($restaurante){
        $page_title = 'Form Element';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;

        $categoriasLocal = CategoriaRestaurante::all();
        $categoriasGlobal = CategoriaGlobal::all();
        $agregados = Agregado::all();

        $restaurante = Restaurante::where('id', $restaurante)->get();
        $restaurante = $restaurante[0];


        $data = [
            'categoriasLocal' => $categoriasLocal,
            'categoriasGlobal' => $categoriasGlobal,
            'agregados' => $agregados,
            'restaurante' => $restaurante
        ];

        return view('desarrollador.menu.create',compact('page_title', 'page_description','action', 'data') );
    }

    /**
     * Logica que permite registrar un restaurante en la base de datos
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'ingredientes'=>'required',
            'precio'=>'required',
            'tiempoElavoracion'=>'required',
            'idRestaurante'=>'required',
            'foto'=>'nullable',
        ]);

        $menu = new Menu();
        $menu->nombre = $request->get('nombre');
        $menu->descripcion = $request->get('descripcion');
        $menu->ingredientes = $request->get('ingredientes');
        $menu->precio = $request->get('precio');
        $menu->tiempoElavoracion = $request->get('tiempoElavoracion');
        $menu->disponible = '1';
        $menu->edad18 = '0';
        $menu->idRestaurante = $request->get('idRestaurante');
        $menu->save();

        return redirect('desarrollador/restauranteD/'.$menu->idRestaurante.'/menuD');
    }

    /**
     * Pagina principal de restaurante
     * Se debe mostrar la lista de restaurantes del sistema
     */
    public function show($restaurante, $menu){
        $page_title = 'Detalle Productos';
        $page_description = 'Detalle del productos';
		
		$action = __FUNCTION__;

        $menu = Menu::where('id', $menu)->get();
        $menu = $menu[0];

        $restaurante = Restaurante::where('id', $restaurante)->get();
        $restaurante = $restaurante[0];

        $categorias = MenuCategoriaGlobal::Where('idMenu', $menu['id'])->get();
        foreach($categorias as $categoria){
            $pivote = CategoriaGlobal::Where('id', $categoria['idCategoriaGlobal'])->get();
            $categoria->descripcion = $pivote[0]->descripcion;
        }

        $data = [
            'menu' => $menu,
            'categorias' => $categorias,
            'restaurante' => $restaurante
        ];

        return view('desarrollador.menu.show',compact('page_title', 'page_description','action', 'data') );
    }

    /**
     * Logica que permite registrar un restaurante en la base de datos
     */
    public function edit($restaurante, $menu)
    {
        $page_title = 'Editar Menu';
        $page_description = 'Detalle del productos';

		
        $menu = Menu::Where('id', $menu)->get();
        $menu = $menu[0];

        $restaurante = Restaurante::where('id', $restaurante)->get();
        $restaurante = $restaurante[0];

		$action = __FUNCTION__;

        $categoriasLocal = CategoriaRestaurante::all();
        $categoriasGlobal = CategoriaGlobal::all();
        $agregados = Agregado::all();

        $data = [
            'categoriasLocal' => $categoriasLocal,
            'categoriasGlobal' => $categoriasGlobal,
            'agregados' => $agregados,
            'menu' => $menu,
            'restaurante' => $restaurante

        ];

        return view('desarrollador.menu.edit',compact('page_title', 'page_description','action', 'menu', 'data') );

    }

    /**
     * Logica que permite registrar un restaurante en la base de datos
     */
    public function update(Request $request)
    {
     
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'ingredientes'=>'required',
            'precio'=>'required',
            'tiempoElavoracion'=>'required',
            'foto'=>'nullable',
        ]);

        $menu = Menu::find($request->get('id'));
        $menu->nombre = $request->get('nombre');
        $menu->descripcion = $request->get('descripcion');
        $menu->ingredientes = $request->get('ingredientes');
        $menu->precio = $request->get('precio');
        $menu->tiempoElavoracion = $request->get('tiempoElavoracion');
        $menu->disponible = '1';
        $menu->edad18 = '0';
        $menu->save();
    
        $url= url()->previous(); 
        return redirect('desarrollador/restauranteD/'.$menu->idRestaurante.'/menuD');
    }

    /**
     * Logica que permite registrar un restaurante en la base de datos
     */
    public function destroy($restaurante, $menu)
    {
        $menu = Menu::find($menu);
        if ($menu == null) {
            //no existe
        }else{
            $menu->delete();
            return redirect('desarrollador/restauranteD/'.$menu->idRestaurante.'/menuD');
        }
    }
}