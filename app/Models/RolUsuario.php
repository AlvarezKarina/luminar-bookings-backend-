<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolUsuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';

    // Desactivar timestamps
    public $timestamps = false;


    protected $fillable = array(
        'user',
        'nombre',
        'apellido',
        'codigo_area',
        'telefono',
        'fecha_nacimiento',
        'foto',
        'rol_id',
        'user_id'

    );

    protected $hidden = array(
        'id',
        'rol_id',
        'updated_at',
    );

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }
}
