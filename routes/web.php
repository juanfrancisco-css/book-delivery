<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/bienvenido', function () {
    return view('bienvenidos');
})->name('bienvenido');
*/

/*
Route::get('/bienvenidos', function () {
    return view('bienvenidos');
})->name('bienvenido');
*/


/*//////////////////////     Pagina de Bienvenida \\\\\\\\\\\\\\\\\\\\\\\\\\\*/ 
Route::get('/book&delivery', function () {
    return view('home.index');
})->name('bienvenido');


/*//////////////////////   Formularios   \\\\\\\\\\\\\\\\\\\\\\\\\\\*/
Route::get('/iniciar sesión', function () {         // Iniciar Sesion
    return view('formularios.login');
})->name('iniciar-sesión');

Route::get('/Registrarse', function () {         // Registro
    return view('formularios.register');
})->name('suscribirse');


/*//////////////////////     Pagina de Inicio \\\\\\\\\\\\\\\\\\\\\\\\\\\*/
Route::get('/inicio', function () {              
    return view('home.inicio');
})->name('inicio');


/*//////////////////////     Paginas de Contenido  \\\\\\\\\\\\\\\\\\\\\\\\\\\*/

Route::get('/Contenido1', function () {              
    return view('home.contenido1');
})->name('contenido1');