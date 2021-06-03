<?php

namespace App\Http\Controllers;

use App\Models\Enfermedad;
use Illuminate\Http\Request;
use Validator;

class EnfermedadController extends Controller {
    
    public function create(Request $request) {
        $val = Validator::make(
            $request->all(), [
                "nombre_enfermedad"   => "required",
                "usuario_id"          => "required",
                "infermedad_clase_id" => "required",
                "detalle"             => "required",
            ]
        ); 
        if ($val->fails()) {
           $respuesta["exito"] = false;
            $respuesta["msg"]   = "Parametros requeridos";
        }  else {
            
            $respuesta["exito"]    = true;
            $respuesta["msg"]      = "Registro exitoso";
            $respuesta["contacto"] = Enfermedad::create($request->all());
        }
        return response()->json($respuesta);
    }   

    public function update(Request $request) {
        $val = Validator::make(
            $request->all(), [
                "enfermedad_id"       => "required",
                "nombre_enfermedad"   => "required",
                "usuario_id"          => "required",
                "infermedad_clase_id" => "required",
                "detalle"             => "required",
            ]
        ); 
        if ($val->fails()) {
           $respuesta["exito"] = false;
            $respuesta["msg"]   = "Parametros requeridos";
        }  else {
            
            $respuesta["exito"]    = true;
            $respuesta["msg"]      = "Registro exitoso";
            $respuesta["contacto"] = Enfermedad::create($request->all());
        }
        return response()->json($respuesta);
    }   
}