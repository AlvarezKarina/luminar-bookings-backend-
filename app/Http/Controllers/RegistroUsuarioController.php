<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importar modelo 
use App\Models\Usuario;

//Importar el request.
use App\Http\Requests\UsuarioRequest;

class RegistroUsuarioController extends Controller
{
    //METODOS 

    //Listado de todos los clientes. 
    public function index()
    {
        //SELECT * FROM usuario.
         $usuario = Usuario::all();

         //Validacion si existe al menos un cliente. 

         if (count($usuario)<1) {
            return response()->json(array(
                'message' => "No se encontraron usuarios.",
                'data' => $usuario,
                'code' => 404,
            ), 404);
        }

        return response()->json(array(
            'message' => "Listado general de usuarios.",
            'data' => $usuario,
            'code' => 200,
        ), 200);



        return $usuario;
    }

    //Inserta un nuevo elemento a la tabla 
    public function store(UsuarioRequest $request){
        //INSERT INTO categorias (nombre, descripcion ) VALUES(?,?);
        $data = array(
            'user' => $request->user,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'correo' =>$request->correo,
            'codigo_area' =>$request->codigo_area,
            'telefono' =>$request->telefono,
            'password' =>$request->password,
            'fecha_nacimiento' =>$request->fecha_nacimiento,
            'foto' =>$request->foto,
            'rol_id' =>$request->rol_id
        );

        $newUsuario = new Usuario ($data);
        if ($newUsuario->save() == false) {
            return response()->json(array(
                'message' => "Informacion no procesada. Por favor revise.",
                'data' => $data,
                'code' => 422,
            ), 422);
        }

        return response()->json(array(
            'message' => "Cliente guardado con exito.",
            'data' => $data,
            'code' => 201,
        ), 201);

    }

}
