<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';

    protected $fillable = [
        'Nombre_curso',
        'Descripcion',
        'Horario',
        'Aula',        
    ];

    public function getNombreCursoAttribute()
    {
        return $this->Nombre_curso;
    }
}
