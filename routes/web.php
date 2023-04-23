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

/*//////////////////////   Formularios   \\\\\\\\\\\\\\\\\\\\\\\\\\\*/



                                  ////// Iniciar Sesion \\\\\

Route::get('/login',[LoginController::class,'show'])->name('login'); //visuaizar
Route::post('/login',[LoginController::class,'login'])->name('login'); //introducir 


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


////////////////// ///////   Pagina de Inicio \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

Route::get('/book&delivery', function () {              
    return view('index');
})->name('index');


////////////////// ///////   Catalogo de comida \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('/menu', function () {              
    return view('menu');
})->name('menu');


////////////////// ///////   Pagina de Nosotros \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('/sobrenosotros', function () {              
    return view('about');
})->name('about');


////////////////// ///////   Formulario de Reservar\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

Route::get('/reserva', function () {              
    return view('book');
})->name('book');



////////////////// ///////   Pagina de datos del usuario \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('/book&delivary', function () {              
    return view('user-dato');
})->name('users');

