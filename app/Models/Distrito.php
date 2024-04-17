<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;

    private $table = 'distrito';

        // Desactivar timestamps
        public $timestamps = false;

    private $fillable = array(
        'nombre_distrito',
        'municipio_id',
    );

    private $hidden = array(
        'id',
        'municipio_id',
        'updated_at',
    );

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

    public function rolEmpresas()
    {
        return $this->hasMany(RolEmpresa::class);
    }
}
