<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiante';
    public $timestamps = true;
    protected $fillable = [
        'Nombre',
        'Apellido',
        'Fecha_Nacimiento',
        'Genero',
        'Dirrecion',
        'Telefono_Contacto',
        'Correo_Electronico',
        'Informacion_Medica',
        'Fecha_Ingreso',
    ];

    public function getNombreCompletoAttribute()
    {
        return $this->Nombre . ' ' . $this->Apellido;
    }
}
