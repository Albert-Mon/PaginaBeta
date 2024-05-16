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


ROUTE::controller(BetaController::class)->group(function(){
    Route::GET('contactoshow', 'show')->name('contactoshow.show');
    Route::GET('contactos/{id}', 'show2')->name('contactos.show2');
    Route::GET('contactos', 'index')->name('contactos.index');
    Route::POST('contactos', 'envioemails')->name('contactos.envioemails');
    ROUTE::GET('contactos/{contacto}/editar', 'editar')->name('contactos.editar');
});



