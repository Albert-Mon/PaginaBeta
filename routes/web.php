<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BetaController;

Route::get('/', function () {
    return view('welcome');
});

//aquí se crea un grupo de rutas que son las que llaman al mismo controlador, no se debe de juntar o anexar 
//otra ruta a este grupo que no pertenezca al controlador, ya que no se va a mandar a llamar    
// Route::controller(BetaController::class)->group(function(){
//     Route::get('contactos', 'index');

//     Route::get('contactos/create', 'create');
    
//     Route::get('contactos/{contacto}','show');    
// });


Route::get('contactoshow', [BetaController::class, 'show'])->name('contactoshow.show');

Route::get('contactos/{id}', [BetaController::class, 'show2'])->name('contactos.show2');

Route::get('contactos', [BetaController::class, 'index'])->name('contactos.index');

Route::POST('contactos', [BetaController::class, 'envioemails'])->name('contactos.envioemails');


