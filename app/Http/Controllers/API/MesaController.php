<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Mesa;

use Validator;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesas =  Mesa::all();
        return response()->json([
            'success' => true,
            'message' => "done",
            'data' => ['mesas'=>$mesas]
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
        $entradas = $request->only('nombre', 'descripcion', 'capacidad');
        $validator = Validator::make($entradas, [
            'nombre' => ['required', 'string'],
            'descripcion' => [' required', 'string'],
            'capacidad' => ['required', 'string']
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error en datos ingresados',
                'data' => ['error'=>$validator->errors()]
            ], 422);
        }
        //$entradas = $this->rellenarDatosFaltantes(null, $entradas);
        try{
            $mesa = new Mesa();
            $mesa->nombre=$entradas['nombre'];
            $mesa->descripcion=$entradas['descripcion'];
            $mesa->capacidad=$entradas['capacidad'];
            $mesa->save();
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['mesa'=>$mesa]
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
        $entradas = $request->only('nombre', 'descripcion', 'capacidad');
        $validator = Validator::make($entradas, [
            'nombre' => ['required', 'string'],
            'descripcion' => [' required', 'string'],
            'capacidad' => ['required', 'string']
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error en datos ingresados',
                'data' => ['error'=>$validator->errors()]
            ], 422);
        }
        try{
            $mesa = Mesa::find($id);
            if($mesa==null){
                return response()->json([
                    'success' => false,
                    'message' => 'La mesa con el id '.$id.' no existe',
                    'data' => null
                ], 409 );
            }
            //$entradas = $this->rellenarDatosFaltantes($mesa, $entradas);
            $mesa->nombre=$entradas['nombre'];
            $mesa->descripcion=$entradas['descripcion'];
            $mesa->capacidad=$entradas['capacidad'];
            $mesa->save();
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['mesa'=>$mesa]
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
            $mesa = Mesa::find($id);
            if($mesa==null){
                return response()->json([
                    'success' => false,
                    'message' => 'La mesa con el id '.$id.' no existe',
                    'data' => null
                ], 409 );
            }
            $mesa->delete();
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['mesa'=>$mesa]
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
}
