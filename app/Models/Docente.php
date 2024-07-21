<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = 'docentes';

    protected $fillable = [
        'Nombre',
        'Apellido',
        'Fecha_Nacimiento',
        'Genero',
        'Direccion',
        'Telefono_Contacto',
        'Correo_Electronico',
        'Rol',
        'Fecha_Inicio',
    ];

    public function getNombreCompletoAttribute()
    {
        return $this->Nombre . ' ' . $this->Apellido;
    }
}
