<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable{
    use HasFactory, Notifiable; }

    
class TipoEvento extends Model
{
    protected $table = 'tipo_evento';
    public $timestamps = false;
    protected $fillable = array('nombre_tipo');

    protected $hidden = ['created_at', 'updated_at'];

}


