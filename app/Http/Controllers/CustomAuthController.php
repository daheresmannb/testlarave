<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
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
            return redirect("login")->withSuccess('Parametros requeridos');
        }  else {
            $credentials = $request->only('rut', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->intended('home')
                ->withSuccess('Has iniciado sesion');
            } else {
                return redirect("login")->withSuccess('No se puede iniciar sesion');
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
            return redirect("auth.registration")->withSuccess('No se puede iniciar sesion');
        }  else {
            User::create($request->all());
            return redirect("dashboard")->withSuccess('Tu has iniciado sesion');
        }
    }


    public function create(array $data) { // no la usare
      return User::create($data);
    }    
    
    public function dashboard() {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function home() {
        if(Auth::check()){
            return view('home.home');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}