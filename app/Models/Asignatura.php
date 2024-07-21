<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignaturas';

    protected $fillable = [
        'Nombre_materia',
        'Descripcion',
        'Contenido_curso',
    ];

    public function getNombreMateriaAttribute()
    {
        return $this->Nombre_materia;
    }
}
