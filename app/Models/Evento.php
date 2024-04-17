<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


    class Evento extends Model
    {

        use HasFactory;
        protected $table = 'evento';
        public $timestamps = false;
        protected $fillable = array(
            'nombre',
            'descripcion',
            'categoria_id',
            'tipo_id',
            'precio',
            'asistentes',
            'direccion',
            'foto',
            'distrito',
            'estado_id',
            'fecha',
            'hora_inicio',
            'hora_fin',
            'delete_at'
     );
    
      protected $hidden= array (
            'distrito_id',
            'tipo_id'
    
        );
    
        public function categoria()
        {
            return $this->belongsTo(CategoriaEvento::class);
        }
    
        public function tipo()
        {
            return $this->belongsTo(TipoEvento::class);
        }
    
        public function distrito()
        {
            return $this->belongsTo(Distrito::class);
        }
    
        public function estado()
        {
            return $this->belongsTo(EstadoEvento::class);
        }
    }
    