<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    //Tabla la tabla a trabajar
    protected $table = "customers";

    // Desactivar timestamps
    public $timestamps = false;


    //Definicion de los campos 
    protected $fillable = array(
        'num_compra',
        'fecha_compra',
        'cantidad_boletos',
        'num_tarjeta',
        'evento_programado_id',
        'usuario_id', 
    );

    protected $hidden = array(
        'id',
        'evento_programado_id',
        'usuario_id',
        'updated_at',
    );
}
