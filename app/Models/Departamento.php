<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    private $table = 'departamento';

       // Desactivar timestamps
       public $timestamps = false;

       private $fillable = array(
        'nombre_departamento',
       );

       private $hidden = array(
        'id',
        'updated_at',
       );

}
