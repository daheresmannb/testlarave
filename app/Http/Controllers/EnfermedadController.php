<?php

namespace App\Http\Controllers;

use App\Models\Enfermedad;
use Illuminate\Http\Request;
use App\Models\EnfermedadClase;
use Illuminate\Support\Facades\Auth;
use Validator;

class EnfermedadController extends Controller {

    public function index() {
        if(Auth::check()) {
            $tipos = EnfermedadClase::all();
            return view(
                'enfermedad.enfermedad', [
                    "tipos_enf" => $tipos
                ]
            );
        }
  
        return redirect("login")->with(
            'message', 
            'Error al iniciar sesion'
        );
    }

    public function tipos() {
        if(Auth::check()) {
            $tipos = EnfermedadClase::where(
                "id", 
                Auth::user()->id
            );
            return view(
                'tipo_enfermedad.tipo_enfermedad', [
                    "tipos_enf" => $tipos
                ]
            );
        }
  
        return redirect("login")->with(
            'message', 
            'Error al iniciar sesion'
        );
    }
    
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

    public function show(Request $request) {
        if ($request->has("enfermedad_id")) {
            $enfermedad = Enfermedad::find(
                $request->enfermedad_id
            )->with("claseenfermedad");

            $respuesta["exito"] = false;
            $respuesta["msg"]  = "Parametros requeridos";
        }  else {
            $respuesta["exito"] = false;
            $respuesta["msg"]   = "Parametros requeridos";   
        }
        return response()->json($respuesta);
    } 

    public function delete_tipo(Request $request) {
        if ($request->has("enf_tipo_id")) {
            $enf_tipo = EnfermedadClase::find(
                $request->enf_tipo_id
            );

            if (isset($enf_tipo)) {
                $enf_tipo->delete();

                return redirect("tipos")->with(
                    'message', 
                    'Tipo borrado con exito'
                );
            } else {
                $respuesta["exito"] = false;
                $respuesta["msg"]  = "Parametros requeridos";
            }
        }  else {
            $respuesta["exito"] = false;
            $respuesta["msg"]   = "Parametros requeridos";   
        }
        return response()->json($respuesta);
    }   
}