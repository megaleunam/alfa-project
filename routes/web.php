<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('inicio', function () {
    return view('pginicial');
});

//Route::get('personas','Persona_Controller@getDatos');
Route::get('celulas','Celula_Controller@getDatos');
Route::get('redes','Red_Controller@getDatos');
//Route::get('iglesias','Iglesia_Controller@getDatos');

//Route::post('agregariglesia','Iglesia_Controller@store');

//Route::get('iglesiaagg',function (){return view('Iglesia/iglesiaAgg');});


Route::get('formularioPersona',function(){
          return view('Persona/formulario');
});

Route::resource('usuario','UsuarioController');
Route::resource('persona','PersonaController');
Route::resource('iglesia','IglesiaController');
Route::resource('asiste','AsisteReunionController');