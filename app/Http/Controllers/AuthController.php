<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon; //Sirve para crear fechas. 
use Illuminate\Http\Request;

//Librerias para cambio de contraseña. 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\PasswordReset;

//Modelo para consultar usuarios. 
use App\Models\User;
use App\Models\RolUsuario;

class AuthController extends Controller
{
    //Registro de Usuario 
    public function registerUusuario(Request $request){
        //NO OLVIDAR EL REQUEST KARINA.
        //$request->validate(),

        $data = array(
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'user' => $request->user,
            'password' =>bcrypt($request->password),
            'codigo_area' =>$request->codigo_area,
            'telefono' =>$request->telefono,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'foto' => $request->foto,
            'rol_id' => $request->rol_id

        );

        $newUser = new User($usuario);
        $newUsuario = new RolUsuario($data);

        if ($newUser->save() || $newUsuario->save() ==false){
            return response()->json(array(
                'message' => "Informacion no procesada",
                'data',
                'code' => 422,
            ),422);
        }
        return response()->json(array(
            'message' => 'Registrado con exito',
            'data' => $newUser, $usuario,
            'code' =>201,
        ),201);

    }
}
