<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable{
    use HasFactory, Notifiable; }

    class CategoriaEvento extends Model
{
    protected $table = 'categoria_evento';
    protected $fillable = array(
'nombre_categoria'

);

protected $hidden = ['created_at', 'updated_at'];
}