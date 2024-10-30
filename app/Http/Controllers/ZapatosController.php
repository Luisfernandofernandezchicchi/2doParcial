<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Validator;
use App\Models\zapato;
use Database\Seeders\ZapatosSeeder;

class ZapatosController extends Controller
{
    public function show(){
        return zapato_::all();
    }

    public function edit(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'Marca' => 'required',
            'Modelo' => 'required',
            'Tamaño' => 'required',
            'Tipo' => 'required',
        ]);
        $zapatos = zapato_::find($id);
            $zapatos->Marca = $request->Marca;
            $zapatos->Modelo = $request->Modelo;
            $zapatos->Tamaño = $request->Tamaño;
            $zapatos->Tipo = $request->Tipo;
            $zapatos->save(); 
    
            return response()->json(["message" => "Actualización exitosa"]);
        
    }
    public function delete($id){
        zapato_::destroy($id);
        return response()->json(["message"=>"Eliminacion Existosa"]);                                
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'Marca' => 'required',
            'Modelo' => 'required',
            'Tamaño' => 'required',
            'Tipo' => 'required',
        ]);      
        
        if ($validator->fails()) 
        {
            return response()->json(["message"=>"Error al crear Registro"]);                        
        }
        
        try
        {
            $zapato = new Student;
            $zapato->Marca = $request->Marca;
            $zapato->Modelo = $request->Modelo;
            $zapato->Tamaño = $request->Tamaño;
            $zapato->Tipo = $request->Tipo;
            $zapato->save();
            return response()->json(["message"=>"Registro Exitoso"]);            
        }
        catch(Exception $e)
        {
            return response()->json(["message"=>"Erro al crear Registro"]);            
        }
    }    
}