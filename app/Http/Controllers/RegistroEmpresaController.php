<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importar los modelos. 
use App\Models\Empresa;


class RegistroEmpresaController extends Controller
{
    
       //Todas las empresas
       public function index(){
        
        $empresa = Empresa::all(); 
    
        //Validacion de existencias
    
        if (count($empresa)<1) {
            return response()->json(array(
                'message' => "No se encontraron empresas.",
                'data' => $empresa,
                'code' => 404,
            ), 404);
        }
    
        return response()->json(array(
            'message' => "Listado general de empresas.",
            'data' => $empresa,
            'code' => 200,
        ), 200);
    
    
    
        return $empresa;
    }

     //Obtener una empresa en especifico
     public function show(Request $request, string $nombre){ 
        
    
        $empresa = Empresa::where('nombre', '=', $nombre)->first();  
        if ($empresa == NULL) {
            return response()->json(array(
                'message' => "Empresa no encontrada",
                'data' => $empresa,
                'code' => 404,
            ), 404);
        }
    
        return response()->json(array(
            'message' => "Empresa encontrada..",
            'data' => $empresa,
            'code' => 200,
        ), 200);
    
    
    }

    public function store(Empresa $request){
        $request->validated();
        $data = array(
    'nombre' => $request->nombre_empresa,
    'nombre_encargado'=> $request->nombre_encargado, 
    'correo'=> $request->correo, 
    'telefono'=>$request->telefono, 
    'foto'=> $request->foto, 
    'actividad_comercial'=> $request->actividad_comercial, 
    'direccion'=>$request->direccion, 
        );
    //insercion de datos
    $newEmpresa = new Empresa($data);
    
    if ($newEmpresa->save() == false) {
        return response()->json(array(
            'message' => "Informacion no procesada. Por favor revise.",
            'data' => $data,
            'code' => 422,
        ), 422);
    }
    
    return response()->json(array(
        'message' => "Empresa guardada con exito.",
        'data' => $data,
        'code' => 201,
    ), 201);

}


}
