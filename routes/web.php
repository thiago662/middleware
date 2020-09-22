<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioControlador;
use App\Http\Middleware\PrimeiroMiddleware;

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

Route::get('usuarios', [UsuarioControlador::class, 'index'])->middleware('primeiro','segundo');
Route::get('terceiro', function(){
    return "Passou";
})->middleware('terceiro:chico,47');
//Route::get('usuarios', [UsuarioControlador::class, 'index'])->middleware('primeiro');
//Route::get('usuarios', [UsuarioControlador::class, 'index'])->middleware(PrimeiroMiddleware::class);
