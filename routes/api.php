<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Primero se manda a llamar al controlador

//Importando controladores(Controllers)
// use App\Http\Controllers\HelloController; //->Importacion
// use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegistroUsuarioController;
use App\Http\Controllers\RegistroEmpresaController;

//Route::get('/user', function (Request $request) {
 //   return $request->user();
//})->middleware('auth:sanctum');

Route::get('/usuario/index', array(

    RegistroUsuarioController::class,
    'index'

))->name('usuario.index');

Route::get('/empresa/index', array(

    RegistroEmpresaController::class,
    'index'

))->name('empresa.index');


Route::post('/usuario/store', array(
    RegistroUsuarioController::class,
    'store'

))->name('usuario.store');


Route::group(array(

    'prefix' => "auth" 
), function(){

    //Ruta para registrar un nuevo usuario. 
    Route::post('register', array(
        AuthController::class,
        'registerUusuario'
    ))->name('auth.register');
}

);
