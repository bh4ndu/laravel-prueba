<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    //aqui empieza a codear

    protected $table = 'alumnos';
    protected $fillable = [
        'nombre',
        'edad',
        'DNI',
        'estado_id'
    ];

    public function relacion() {
        return $this ->belongsTo(estado::class, 'estado_id');
    }


    //aqui termina el codeo
}
