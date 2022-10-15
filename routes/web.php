<?php

use Illuminate\Support\Facades\Route;

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

Route::get('vistacuatro','App\Http\Controllers\micontrolador@vista4');
Route::get('vistacinco','App\Http\Controllers\micontrolador@vista5');
Route::get('vistaseis','App\Http\Controllers\micontrolador@vista6');

Route::get('registrarlibro', 'App\Http\Controllers\micontrolador@registralibro')->name('registrarlibro');
Route::post('guardarlibro', 'App\Http\Controllers\micontrolador@guardarlibro')->name('guardarlibro');

Route::get('registrareditor', 'App\Http\Controllers\micontrolador@registraeditor')->name('registrareditor');
Route::post('guardareditor', 'App\Http\Controllers\micontrolador@guardareditor')->name('guardareditor');

Route::get('consultalibros', 'App\Http\Controllers\micontrolador@consultalibros')->name('consultalibros');
Route::get('eliminar/{id}', 'App\Http\Controllers\micontrolador@eliminarLibro')->name('eliminarlibro');

Route::get('consultaeditores', 'App\Http\Controllers\micontrolador@consultaeditores')->name('consultaeditores');
Route::get('eliminar2/{id}', 'App\Http\Controllers\micontrolador@eliminarEditor')->name('eliminareditor');

Route::get('muestra/{id}', 'App\Http\Controllers\micontrolador@muestraLibro')->name('muestralibro');
Route::POST('editar/{id}', 'App\Http\Controllers\micontrolador@editalibro')->name('editarlibro');

Route::get('muestra2/{id}', 'App\Http\Controllers\micontrolador@muestraEditor')->name('muestraeditor');
Route::POST('editar2/{id}', 'App\Http\Controllers\micontrolador@editaeditor')->name('editareditor');

Route::get('cancelaaccion1', 'App\Http\Controllers\micontrolador@consultalibros')->name('cancelaaccion1');
Route::get('cancelaaccion', 'App\Http\Controllers\micontrolador@consultaeditores')->name('cancelaaccion');


Route::get('home','App\Http\Controllers\micontrolador2@home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

