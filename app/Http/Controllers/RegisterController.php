<?php

namespace App\Http\Controllers;
use App\Models\User; //importamos la clase 
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest; //importamos la clase 
use Illuminate\Support\Facades\Auth; //importa una libreria para autenticaciones
class RegisterController extends Controller
{
    //


    public function show (){ // para poder mostrar la vista 

       if(Auth::check()){ // verificar si hay un usuario con una sesion autenticada 

              /*
              Si existe un usuario ya autenticado no podra acceder al formulario de registro
              */
              return redirect()->route('index');
          }
    return view('auth.register'); //ruta 
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

    //Para redireccionarla una vez creada la pagina se dirige a login 
    return redirect ()->route('login')->with('success','Cuenta Creada Exitosamente');
           
    }
}
