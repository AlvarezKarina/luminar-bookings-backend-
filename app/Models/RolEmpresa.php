<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


    class RolEmpresa extends Model
{

    use HasFactory;

    protected $table = 'empresa';
    public $timestamps = false;
    protected $fillable = array(
        'nombre',
        'nombre_encargado',
        'telefono',
        'foto',
        'actividad_comercial',
        'direccion',
        'distrito_id',
        'estado_id',
        'rol_id',
        'user_id'
);


    protected $hidden= array (
  'estado_id', 
  'rol_id', 
  'distrito_id'
    );

    public function distrito()
    {
        return $this->belongsTo(Distrito::class);
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    public function estado()
    {
        return $this->belongsTo(EstadoEmpresa::class);
    }

    public function usuario()
    {
        return $this->belongsTo(RolUsuario::class, 'user_id');
    }
}


