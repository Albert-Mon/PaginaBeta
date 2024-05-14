<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class BetaController extends Controller
{
    // //con esta funcion "invoke" es para controlar solo una ruta, no mas
    // public function __invoke(){
    //     return "Bienvenido a la beta";
    // }
    public function show(){
        $contactos = Contacto::paginate();
        //return $contactos;
        return view('iniciopage.show', compact('contactos'));
    }

    public function show2($id){
        
        $contacto = Contacto::find($id);

        // return $contactos;

        return view('iniciopage.show2', compact('contacto'));
    }


    public function index(){
        return view('iniciopage.index');
    }

    public function envioemails(Request $request){
        //return $request -> all(); //visualizar los registros

        $contacto = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->compañia = $request->compañia;
        $contacto->telefono = $request->telefono;
        $contacto->email = $request->email;
        $contacto->asunto = $request->asunto;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();
    }

}
