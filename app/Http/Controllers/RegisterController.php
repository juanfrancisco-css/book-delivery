<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterReques; //importamos la clase 

class RegisterController extends Controller
{
    //


    public function show (){ // para poder mostrar la vista 

               return view('formularios.register'); //ruta 
    }

           // utilizamos la clase de la carpeta Request 
    public function register(RegisterRequest $request){  //Dar de Alta 

           /* Tenemos dos opciones*/ 

           //opcion 1) 
           $user =  User::create($request->validated()); //Hara la llamada a nuestras reglas automaticamente ( method rules)
    
    /*
    opcion 2)
                    $request->validate([
                                            'name'=> 'required|unique:categories|max:255',
                                            'color'=>'required|max:7'
                                       ]);

                    $user = new User;
                    $user->name=$request->name;
                    $user->color=$request->color;
                    $user->save();
    */

           
    }
}
