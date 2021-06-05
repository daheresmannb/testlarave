<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;

class ContactoController extends Controller {

    public function index() {  
        return view("contacto.contacto");
    }

    public function mensajes() {  
        if(Auth::check()) {
            return view("mensajes.mensajes");
        }
        return redirect("login");
    }

    public function crear(Request $request) {
        $val = Validator::make(
            $request->all(), [
                "correo_contacto" => "required",
                "comentario"      => "required"
            ]
        ); 
        if ($val->fails()) {
            return redirect("login")->with(
                'message_e', 
                'Parametros requeridos'
            );
        }  else {
            $respuesta["contacto"] = Contacto::create($request->all()); // request all() retorna un array con todos los parametros q vienen en la request
            return redirect("login")->with(
                'message', 
                'Hemos recibido su mensaje, pronto le responderemos'
            );
        }
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
