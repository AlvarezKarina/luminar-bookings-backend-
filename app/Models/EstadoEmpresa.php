<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable; }
    

 class EstadoEmpresa extends Model
 {
     protected $table = 'estado';
     public $timestamps = false;
     protected $fillable = array('tipo_estado');
 }