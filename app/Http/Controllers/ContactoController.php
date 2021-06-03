<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use Validator;

class ContactoController extends Controller {

    public function create(Request $request) {
        $val = Validator::make(
            $request->all(), [
                "correo_contacto" => "required",
                "comentario"      => "required"
            ]
        ); 
        if ($val->fails()) {
            $respuesta["exito"] = false;
            $respuesta["msg"]   = "Parametros requeridos";
        }  else {
            
            $respuesta["exito"]    = true;
            $respuesta["msg"]      = "Registro exitoso";
            $respuesta["contacto"] = Contacto::create($request->all()); // request all() retorna un array con todos los parametros q vienen en la request
        }
        return response()->json($respuesta);
    }

    public function show(Request $request) {
        if ($request->has("contacto_id")) {
            $respuesta["contacto"] = Contacto::find($request->contacto_id); // retorna uno
        } else {
            $respuesta["contacto"] = Contacto::all(); // retorna todos
        }
        return response()->json($respuesta);
    }
}
