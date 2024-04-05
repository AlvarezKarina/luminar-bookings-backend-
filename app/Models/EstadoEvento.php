<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoEvento extends Model
{
    use HasFactory;

    //Nombre de la tabla de la base de datos
    private $table = "estado_evento";

    // Desactivar timestamps
    public $timestamps = false;


    //Campos requeridos 
    public $fillable = array(
        'nombre_estado'
    );

    //Campos a ocultar en la consulta. 
    protected $hidden = array(
        'id',
    );
}
