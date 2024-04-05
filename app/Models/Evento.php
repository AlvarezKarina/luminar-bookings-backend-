<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable{


    
    use HasFactory, Notifiable; }

    class Evento extends Model
    {
        protected $table = 'evento';
        public $timestamps = false;
        protected $primaryKey = 'id';
        protected $fillable = array(
     'nombre',
     'descripcion',
     'categoria_id',
     'precio',
     'asistentes', 
     'direccion',
     'foto',
     );
    
      protected $hidden= array (
            'distrito_id',
            'tipo_id'
    
        );
    
        public function categoria()
        {
            return $this->belongsTo(CategoriaEvento::class, 'categoria_id');
        }
    
        public function tipo()
        {
            return $this->belongsTo(TipoEvento::class, 'tipo_id');
        }
    
        public function distrito()
        {
            return $this->belongsTo(Distrito::class, 'distrito_id');
        }
    }
    