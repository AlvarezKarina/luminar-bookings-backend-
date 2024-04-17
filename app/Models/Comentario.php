<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable{


    
    use HasFactory, Notifiable; }


class Comentario extends Model
{
    protected $table = 'comentario';
    public $timestamps = false;


    protected $fillable = array(
'comentario');


 protected $hidden= array (
  'usuario_id', 
  'evento_id',
  'created_at', 
  'updated_at'

);
  



    

    public function evento()
    {
        return $this->belongsTo(Evento::class, 'evento_id');
    }

    public function usuario()
    {
        return $this->belongsTo(RolUsuario::class, 'usuario_id');
    }


    
}