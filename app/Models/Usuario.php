<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';

    // Desactivar timestamps
    public $timestamps = false;


    protected $fillable = array(
        'user',
        'nombre',
        'apellido',
        'correo',
        'codigo_area',
        'telefono',
        'password',
        'fecha_nacimiento',
        'foto',
        'rol_id',

    );

    protected $hidden = array(
        'id',
        'rol_id',
        'updated_at',
    );
}
