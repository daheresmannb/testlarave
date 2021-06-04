<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\Enfermedad;
use App\Models\EnfermedadClase;
use Illuminate\Support\Facades\Auth;
use Validator;

class CustomAuthController extends Controller {
    public function index() {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request) {
        $val = Validator::make(
            $request->all(), [
                'rut'      => 'required',
                'password' => 'required',
            ]
        ); 
        if ($val->fails()) {
            return redirect("login")->with(
                'message_e', 
                'Parametros requeridos'
            );
        }  else {
            $credentials = $request->only('rut', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->intended('home')->with(
                    'message', 
                    'Has iniciado sesion'
                );
            } else {
                return redirect("login")->with(
                    'message_e', 
                    'No se puede iniciar sesion'
                );
            }
        }
    }

    public function registration() {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request) {  
        $val = Validator::make(
            $request->all(), [
                "nombres"   => "required",
                "apellidos" => "required",
                "rut"       => "required",
                "email"     => "required",
                "fecha_nac" => "required",
                "direccion" => "required",
                "comuna"    => "required",
                "region"    => "required",
                "password"  => "required",
            ]
        ); 
        if ($val->fails()) {
            return redirect("auth.registration")->with(
                'message', 
                'No se puede iniciar sesion'
            );
        } else {
            User::create($request->all());
            return redirect("login")->with(
                'message', 
                'Te has registrado con exito!'
            );
        }
    }


    public function create(array $data) { // no la usare
      return User::create($data);
    }    
    

    public function home() {
        if(Auth::check()) {
            $n_tipos_enf = EnfermedadClase::count();
            $n_enfermedades = Enfermedad::count();
            
            return view(
                'home.home', [
                    "n_enfermedades"      => $n_enfermedades,
                    "n_tipo_enfermedades" => $n_tipos_enf 
                ]
            );
        }
  
        return redirect("login")->with(
            'message', 
            'Error al iniciar sesion'
        );
    }

    public function contacto() {  
        return view("contacto.contacto");
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}