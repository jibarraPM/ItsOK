<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Restaurante;
use Validator;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurantes =  Restaurante::all();
        return response()->json([
            'success' => true,
            'message' => "done",
            'data' => ['restaurantes'=>$restaurantes]
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
        $entradas = $request->only('nombre', 'rut', 'descripcion', 'direccion', 'horaApertura', 'horaCierre', 'ubicacionGps', 'logo');
        $validator = Validator::make($entradas, [
            'nombre' => ['required', 'string'],
            'rut' => [' required', 'string'],
            'descripcion' => ['required', 'string'],
            'direccion' => [' required', 'string'],
            'horaApertura' => ['required', 'string'],
            'horaCierre' => ['required', 'string'],
            'ubicacionGps' => [' required', 'string'],
            'logo' => ['required', 'string']
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
            $restaurante = new Restaurante();
            $restaurante->nombre=$entradas['nombre'];
            $restaurante->rut=$entradas['rut'];
            $restaurante->descripcion=$entradas['descripcion'];
            $restaurante->direccion=$entradas['direccion'];
            $restaurante->horaApertura=$entradas['horaApertura'];
            $restaurante->horaCierre=$entradas['horaCierre'];
            $restaurante->ubicacionGps=$entradas['ubicacionGps'];
            $restaurante->logo=$entradas['logo'];
            $restaurante->save();
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['restaurante'=>$restaurante]
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
        //
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
    public function update(Request $request, $id)
    {
        $entradas = $request->only('nombre', 'rut', 'descripcion', 'direccion', 'horaApertura', 'horaCierre', 'ubicacionGps', 'logo');
        $validator = Validator::make($entradas, [
            'nombre' => ['nullable', 'string'],
            'rut' => [' nullable', 'string'],
            'descripcion' => ['nullable', 'string'],
            'direccion' => [' nullable', 'string'],
            'horaApertura' => ['nullable', 'string'],
            'horaCierre' => ['nullable', 'string'],
            'ubicacionGps' => [' nullable', 'string'],
            'logo' => ['nullable', 'string']
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error en datos ingresados',
                'data' => ['error'=>$validator->errors()]
            ], 422);
        }
        try{
            $restaurante = Restaurante::find($id);
            if($restaurante==null){
                return response()->json([
                    'success' => false,
                    'message' => 'El restaurante con el id '.$id.' no existe',
                    'data' => null
                ], 409 );
            }
            $entradas = $this->rellenarDatosFaltantes($restaurante, $entradas);
            $restaurante->nombre=$entradas['nombre'];
            $restaurante->rut=$entradas['rut'];
            $restaurante->descripcion=$entradas['descripcion'];
            $restaurante->direccion=$entradas['direccion'];
            $restaurante->horaApertura=$entradas['horaApertura'];
            $restaurante->horaCierre=$entradas['horaCierre'];
            $restaurante->ubicacionGps=$entradas['ubicacionGps'];
            $restaurante->logo=$entradas['logo'];
            $restaurante->save();
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['restaurante'=>$restaurante]
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
            $restaurante = Restaurante::find($id);
            if($restaurante==null){
                return response()->json([
                    'success' => false,
                    'message' => 'El restaurante con el id '.$id.' no existe',
                    'data' => null
                ], 409 );
            }
            $restaurante->delete();
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['restaurante'=>$restaurante]
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
            if(!array_key_exists ("rut" , $entradas)){
                $entradas['rut'] = null;
            }
            if(!array_key_exists ("descripcion" , $entradas)){
                $entradas['descripcion'] = null;
            }
            if(!array_key_exists ("direccion" , $entradas)){
                $entradas['direccion'] = null;
            }
            if(!array_key_exists ("horaApertura" , $entradas)){
                $entradas['horaApertura'] = null;
            }
            if(!array_key_exists ("horaCierre" , $entradas)){
                $entradas['horaCierre'] = null;
            }
            if(!array_key_exists ("ubicacionGps" , $entradas)){
                $entradas['ubicacionGps'] = null;
            }
            if(!array_key_exists ("logo" , $entradas)){
                $entradas['logo'] = null;
            }
        }else{
            if(!array_key_exists ("nombre" , $entradas)){
                $entradas['nombre'] = $array['nombre'];
            }
            if(!array_key_exists ("rut" , $entradas)){
                $entradas['rut'] = $array['rut'];
            }
            if(!array_key_exists ("descripcion" , $entradas)){
                $entradas['descripcion'] = $array['descripcion'];
            }
            if(!array_key_exists ("direccion" , $entradas)){
                $entradas['direccion'] = $array['direccion'];
            }
            if(!array_key_exists ("horaApertura" , $entradas)){
                $entradas['horaApertura'] = $array['horaApertura'];
            }
            if(!array_key_exists ("horaCierre" , $entradas)){
                $entradas['horaCierre'] = $array['horaCierre'];
            }
            if(!array_key_exists ("ubicacionGps" , $entradas)){
                $entradas['ubicacionGps'] = $array['ubicacionGps'];
            }
            if(!array_key_exists ("logo" , $entradas)){
                $entradas['logo'] = $array['logo'];
            }
        }
        return $entradas;
    }
}
