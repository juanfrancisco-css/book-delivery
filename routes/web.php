<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController; //importamos la libreria para poder utilizar la clase 
use App\Http\Controllers\LoginController; //importamos la libreria para poder utilizar la clase 
use App\Http\Controllers\HomeController;//importamos la libreria para poder utilizar la clase 
use App\Http\Controllers\LogoutController; //importamos la libreria para poder utilizar la clase 
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
Route::get('/inicio', function () {              
    return view('home.inicio');
})->name('inicio');
*/




/*//////////////////////     Pagina de Bienvenida \\\\\\\\\\\\\\\\\\\\\\\\\\\*/ 

Route::get('/book&delivery', function () {
    return view('home.index');
})->name('bienvenido');


/*//////////////////////   Formularios   \\\\\\\\\\\\\\\\\\\\\\\\\\\*/



                                  ////// Iniciar Sesion \\\\\

Route::get('/iniciar sesión',[LoginController::class,'show'])->name('iniciar-sesión'); //visuaizar
Route::post('/iniciar sesión',[LoginController::class,'login'])->name('iniciar-sesión'); //introducir 


                        //////////// Registro  \\\\\\\\\\\
/*              
                   hacemos uso de la clase y su methodos
                            toda la clase en si 
                    [RegisterController::class,'show']
*/
Route::get('/Registrarse',[RegisterController::class,'show'])->name('registrarse');   //visualizar
Route::post('/Registrarse',[RegisterController::class,'register'])->name('registrarse'); //introducir 

//////////////////////////  Destruir la sesion \\\\\\\\\\\\\\\\\
Route::get('/salir',[ LogoutController::class,'logout'])->name('logout');  


/*//////////////////////     Pagina de Inicio \\\\\\\\\\\\\\\\\\\\\\\\\\\*/

Route::get('/inicio',[HomeController::class,'index'])->name('inicio');

/*//////////////////////     Paginas de Contenido  \\\\\\\\\\\\\\\\\\\\\\\\\\\*/

Route::get('/Contenido1', function () {              
    return view('home.contenido1');
})->name('contenido1');

