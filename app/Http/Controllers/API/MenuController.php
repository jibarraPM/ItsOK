<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Menu;

use Validator;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus =  Menu::all();
        return response()->json([
            'success' => true,
            'message' => "done",
            'data' => ['menus'=>$menus]
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entradas = $request->only('nombre', 'descripcion', 'ingredientes', 'precio', 'tiempoElavoracion','disponible', 'idElaboracion', 'edad18');
        $validator = Validator::make($entradas, [
            'nombre' => ['required', 'string'],
            'descripcion' => [' required', 'string'],
            'ingredientes' => ['required', 'string'],
            'precio' => [' required', 'numeric'],
            'tiempoElavoracion' => ['required', 'string'],
            'disponible' => ['required', 'boolean'],
            'idElaboracion' => [' required', 'numeric'],
            'edad18' => ['required', 'string']
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error en datos ingresados',
                'data' => ['error'=>$validator->errors()]
            ], 422);
        }
        $entradas = $this->rellenarDatosFaltantes(null, $entradas);
        try{
            $menu = new Menu();
            $menu->nombre=$entradas['nombre'];
            $menu->descripcion=$entradas['descripcion'];
            $menu->ingredientes=$entradas['ingredientes'];
            $menu->precio=$entradas['precio'];
            $menu->tiempoElavoracion=$entradas['tiempoElavoracion'];
            $menu->disponible=$entradas['disponible'];
            $menu->idElaboracion=$entradas['idElaboracion'];
            $menu->edad18=$entradas['edad18'];
            $menu->save();
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['menu'=>$menu]
            ], 200);
        //----- Mecanismos anticaidas y reporte de errores -----
        }catch(\Illuminate\Database\QueryException $ex){ 
            return response()->json([
                'success' => false,
                'message' => "Error en la base de datos",
                'data' => ['error'=>$ex]
            ], 409);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurante = Restaurante::where('id', $id)->get();
        $restaurante = $restaurante[0];
        $menus = Menu::where('idRestaurante', $id)->get();
        
        return response()->json([
            'success' => true,
            'message' => "done",
            'data' => ['restaurante'=>$restaurante,
                'menus'=>$menus]
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $entradas = $request->only('nombre', 'descripcion', 'ingredientes', 'precio', 'tiempoElavoracion','disponible', 'idElaboracion', 'edad18');
        $validator = Validator::make($entradas, [
            'nombre' => ['nullable', 'string'],
            'descripcion' => [' nullable', 'string'],
            'ingredientes' => ['nullable', 'string'],
            'precio' => [' nullable', 'numeric'],
            'tiempoElavoracion' => ['nullable', 'string'],
            'disponible' => ['nullable', 'boolean'],
            'idElaboracion' => [' nullable', 'numeric'],
            'edad18' => ['nullable', 'string']
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error en datos ingresados',
                'data' => ['error'=>$validator->errors()]
            ], 422);
        }
        try{
            $menu = Menu::find($id);
            if($menu==null){
                return response()->json([
                    'success' => false,
                    'message' => 'El menu con el id '.$id.' no existe',
                    'data' => null
                ], 409 );
            }
            $entradas = $this->rellenarDatosFaltantes($menu, $entradas);
            $menu->nombre=$entradas['nombre'];
            $menu->descripcion=$entradas['descripcion'];
            $menu->ingredientes=$entradas['ingredientes'];
            $menu->precio=$entradas['precio'];
            $menu->tiempoElavoracion=$entradas['tiempoElavoracion'];
            $menu->disponible=$entradas['disponible'];
            $menu->idElaboracion=$entradas['idElaboracion'];
            $menu->edad18=$entradas['edad18'];
            $menu->save();
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['menu'=>$menu]
            ], 200);
        //----- Mecanismos anticaidas y reporte de errores -----
        }catch(\Illuminate\Database\QueryException $ex){ 
            return response()->json([
                'success' => false,
                'message' => "Error en la base de datos",
                'data' => ['error'=>$ex]
            ], 409);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $menu = Menu::find($id);
            if($menu==null){
                return response()->json([
                    'success' => false,
                    'message' => 'El menu con el id '.$id.' no existe',
                    'data' => null
                ], 409 );
            }
            $menu->delete();
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['menu'=>$menu]
            ], 200);
        //----- Mecanismos anticaidas y reporte de errores -----
        }catch(\Illuminate\Database\QueryException $ex){ 
            return response()->json([
                'success' => false,
                'message' => "Error en la base de datos",
                'data' => ['error'=>$ex]
            ], 409 );
        }
    }

    /**
     * Este metodo se encarga de rellenar los datos faltantes que pueden venir en la peticion https
     * Motivo: solicionar el problema al momento de crear añadir un elemento, este puede no existir
     */
    private function rellenarDatosFaltantes($array, $entradas){
        if($array==null){
            if(!array_key_exists ("nombre" , $entradas)){
                $entradas['nombre'] = null;
            }
            if(!array_key_exists ("descripcion" , $entradas)){
                $entradas['descripcion'] = null;
            }
            if(!array_key_exists ("ingredientes" , $entradas)){
                $entradas['ingredientes'] = null;
            }
            if(!array_key_exists ("precio" , $entradas)){
                $entradas['precio'] = null;
            }
            if(!array_key_exists ("tiempoElavoracion" , $entradas)){
                $entradas['tiempoElavoracion'] = null;
            }
            if(!array_key_exists ("disponible" , $entradas)){
                $entradas['disponible'] = null;
            }
            if(!array_key_exists ("idElaboracion" , $entradas)){
                $entradas['idElaboracion'] = null;
            }
            if(!array_key_exists ("edad18" , $entradas)){
                $entradas['edad18'] = null;
            }
        }else{
            if(!array_key_exists ("nombre" , $entradas)){
                $entradas['nombre'] = $array['nombre'];
            }
            if(!array_key_exists ("descripcion" , $entradas)){
                $entradas['descripcion'] = $array['descripcion'];
            }
            if(!array_key_exists ("ingredientes" , $entradas)){
                $entradas['ingredientes'] = $array['ingredientes'];
            }
            if(!array_key_exists ("precio" , $entradas)){
                $entradas['precio'] = $array['precio'];
            }
            if(!array_key_exists ("tiempoElavoracion" , $entradas)){
                $entradas['tiempoElavoracion'] = $array['tiempoElavoracion'];
            }
            if(!array_key_exists ("disponible" , $entradas)){
                $entradas['disponible'] = $array['disponible'];
            }
            if(!array_key_exists ("idElaboracion" , $entradas)){
                $entradas['idElaboracion'] = $array['idElaboracion'];
            }
            if(!array_key_exists ("edad18" , $entradas)){
                $entradas['edad18'] = $array['edad18'];
            }
        }
        return $entradas;
    }
}
