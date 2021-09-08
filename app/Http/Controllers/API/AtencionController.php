<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Compra;
use App\Models\Carrito;

use Validator;

class AtencionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios =  User::all();
        foreach ($usuarios as $usuario) {
            # code...
            $compras =  Compra::where('session_id', $usuario->id)->get();
            foreach ($compras as $compra) {
                $compra->detalle =  Carrito::where('buy_order', $compra->id)->get();
            }
            $usuario->compras = $compras;
        }
        return response()->json([
            'success' => true,
            'message' => "done",
            'data' => ['usuarios'=>$usuarios]
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
        $entradas = $request->only('idConsumidor', 'idMecero', 'idRestaurante', 'idMesa', 'valorAtencion', 'valoracionAtencion');
        $validator = Validator::make($entradas, [
            'idConsumidor' => ['required', 'string'],
            'idMecero' => [' required', 'string'],
            'idRestaurante' => ['required', 'string'],
            'idMesa' => [' required', 'string'],
            'valorAtencion' => ['required', 'string'],
            'valoracionAtencion' => ['required', 'string']
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
            $atencion = new Atencion();
            $atencion->idConsumidor=$entradas['idConsumidor'];
            $atencion->idMecero=$entradas['idMecero'];
            $atencion->idRestaurante=$entradas['idRestaurante'];
            $atencion->idMesa=$entradas['idMesa'];
            $atencion->valorAtencion=$entradas['valorAtencion'];
            $atencion->valoracionAtencion=$entradas['valoracionAtencion'];
            $atencion->save();
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['atencion'=>$atencion]
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
        $entradas = $request->only('idConsumidor', 'idMecero', 'idRestaurante', 'idMesa', 'valorAtencion', 'valoracionAtencion');
        $validator = Validator::make($entradas, [
            'idConsumidor' => ['required', 'string'],
            'idMecero' => [' required', 'string'],
            'idRestaurante' => ['required', 'string'],
            'idMesa' => [' required', 'string'],
            'valorAtencion' => ['required', 'string'],
            'valoracionAtencion' => ['required', 'string']
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error en datos ingresados',
                'data' => ['error'=>$validator->errors()]
            ], 422);
        }
        try{
            $atencion = Atencion::find($id);
            if($atencion==null){
                return response()->json([
                    'success' => false,
                    'message' => 'La atencion con el id '.$id.' no existe',
                    'data' => null
                ], 409 );
            }
            //$entradas = $this->rellenarDatosFaltantes($atencion, $entradas);
            $atencion->idConsumidor=$entradas['idConsumidor'];
            $atencion->idMecero=$entradas['idMecero'];
            $atencion->idRestaurante=$entradas['idRestaurante'];
            $atencion->idMesa=$entradas['idMesa'];
            $atencion->valorAtencion=$entradas['valorAtencion'];
            $atencion->valoracionAtencion=$entradas['valoracionAtencion'];
            $atencion->save();
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['atencion'=>$atencion]
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
            $atencion = Atencion::find($id);
            if($atencion==null){
                return response()->json([
                    'success' => false,
                    'message' => 'La atencion con el id '.$id.' no existe',
                    'data' => null
                ], 409 );
            }
            $atencion->delete();
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['atencion'=>$atencion]
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
