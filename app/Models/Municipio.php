<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    public $table = 'municipio';

     // Desactivar timestamps
     public $timestamps = false;

     private $fillable = array(
        'nombre_municipio',
        'departamento_id',
     );

     private $hidden =  array(

        'id',
        'departamento_id',
        'updated_at',
     );
}
