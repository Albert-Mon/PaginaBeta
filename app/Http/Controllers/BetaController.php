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
    public function index(){
        return view('iniciopage.index');
    }

    public function envioemails(){

    }

    // public function create(){
    //     return view('iniciopage.create');
    // }

    // public function show($contacto){
    //     return view('iniciopage.show', compact('contacto'));
    // }

}
