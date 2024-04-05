<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


    class Empresa extends Model
{

    use HasFactory;

    protected $table = 'empresa';
    public $timestamps = false;
    protected $fillable = array(
'nombre', 
'nombre_encargado', 
'correo', 
'telefono', 
'foto', 
'actividad_comercial', 
'direccion', 
);


    protected $hidden= array (
  'estado_id', 
  'rol_id', 
  'distrito_id'
    );

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }

    public function distrito()
    {
        return $this->belongsTo(Distrito::class, 'distrito_id');
    }
}


