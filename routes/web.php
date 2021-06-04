<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EnfermedadController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

//Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get(
	'home', [
		CustomAuthController::class, 
		'home'
	]
); 
Route::get(
	'login', [
		CustomAuthController::class, 
		'index'
	]
)->name('login');
Route::get(
	'contacto', [
		CustomAuthController::class, 
		'contacto'
	]
)->name('contacto.contacto');
Route::get(
	'enfermedades', [
		EnfermedadController::class, 
		'index'
	]
);

Route::get(
	'tipos', [
		EnfermedadController::class, 
		'tipos'
	]
);

Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::post('contacto/crear', [ContactoController::class, 'create'])->name('contacto.crear'); 
Route::post('contacto/mostrar', [ContactoController::class, 'show'])->name('contacto.mostrar'); 

Route::post(
	'enfermedad/crear', [
		ContactoController::class, 
		'create'
	]
)->name('enfermedad.create'); 
Route::post(
	'enfermedad/actualizar', [
		ContactoController::class, 
		'update'
	]
)->name('enfermedad.update'); 
Route::post(
	'enfermedad/mostrar', [
		ContactoController::class, 
		'show'
	]
)->name('enfermedad.show'); 
