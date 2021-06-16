<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Models\Tarjeta;

use Validator;

class TarjetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarjetas =  Tarjeta::all();
        return response()->json([
            'success' => true,
            'message' => "done",
            'data' => ['tarjetas'=>$tarjetas]
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
        $entradas = $request->only('numeroTarjeta', 'fecha', 'cvc');
        $validator = Validator::make($entradas, [
            'numeroTarjeta' => ['required', 'string'],
            'fecha' => [' required', 'string'],
            'cvc' => ['required', 'string']
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
            $tarjeta = new Tarjeta();
            $tarjeta->numeroTarjeta=$entradas['numeroTarjeta'];
            $tarjeta->fecha=$entradas['fecha'];
            $tarjeta->cvc=$entradas['cvc'];
            $tarjeta->save();
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['tarjeta'=>$tarjeta]
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
        $entradas = $request->only('numeroTarjeta', 'fecha', 'cvc');
        $validator = Validator::make($entradas, [
            'numeroTarjeta' => ['required', 'string'],
            'fecha' => [' required', 'string'],
            'cvc' => ['required', 'string']
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error en datos ingresados',
                'data' => ['error'=>$validator->errors()]
            ], 422);
        }
        try{
            $tarjeta = Tarjeta::find($id);
            if($tarjeta==null){
                return response()->json([
                    'success' => false,
                    'message' => 'El tarjeta con el id '.$id.' no existe',
                    'data' => null
                ], 409 );
            }
            $entradas = $this->rellenarDatosFaltantes($tarjeta, $entradas);
            $tarjeta->numeroTarjeta=$entradas['numeroTarjeta'];
            $tarjeta->fecha=$entradas['fecha'];
            $tarjeta->cvc=$entradas['cvc'];
            $tarjeta->save();
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['tarjeta'=>$tarjeta]
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
            $tarjeta = Tarjeta::find($id);
            if($tarjeta==null){
                return response()->json([
                    'success' => false,
                    'message' => 'El tarjeta con el id '.$id.' no existe',
                    'data' => null
                ], 409 );
            }
            $tarjeta->delete();
            return response()->json([
                'success' => true,
                'message' => "done",
                'data' => ['tarjeta'=>$tarjeta]
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
            if(!array_key_exists ("numeroTarjeta" , $entradas)){
                $entradas['numeroTarjeta'] = null;
            }
            if(!array_key_exists ("fecha" , $entradas)){
                $entradas['fecha'] = null;
            }
            if(!array_key_exists ("cvc" , $entradas)){
                $entradas['cvc'] = null;
            }
        }else{
            if(!array_key_exists ("numeroTarjeta" , $entradas)){
                $entradas['numeroTarjeta'] = $array['numeroTarjeta'];
            }
            if(!array_key_exists ("fecha" , $entradas)){
                $entradas['fecha'] = $array['fecha'];
            }
            if(!array_key_exists ("cvc" , $entradas)){
                $entradas['cvc'] = $array['cvc'];
            }
        }
        return $entradas;
    }
}
