<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    private $table = 'rol';

    
    // Desactivar timestamps
    public $timestamps = false;


    private $fillable = array(
        'nombre_rol', 
    );

    private $hidden = array(
        'id',
        'updated_at',
        'created_at'
    );
}
