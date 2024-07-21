<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Http\Request;


class Estudiante extends Model
{
    protected $table = 'estudiante';
    public $timestamps = true;
    protected $fillable = [
        'Nombre',
        'Apellido',
        'Fecha_Nacimiento',
        'Genero',
        'Direccion',
        'Telefono_Contacto',
        'Correo_Electronico',
        'Informacion_Medica',
        'Fecha_Ingreso',
    ];

    public function getNombreCompletoAttribute()
    {
        return $this->Nombre . ' ' . $this->Apellido;
    }

    public static function updatedStudent($id, Request $request)
    {
        $student = Estudiante::find($id);
        $student->Nombre = $request->input('Nombre');
        $student->Apellido = $request->input('Apellido');
        $student->Fecha_Nacimiento = $request->input('Fecha_Nacimiento');
        $student->Genero = $request->input('Genero');
        $student->Direccion = $request->input('Direccion');
        $student->Telefono_Contacto = $request->input('Telefono_Contacto');
        $student->Correo_Electronico = $request->input('Correo_Electronico');
        $student->Informacion_Medica = $request->input('Informacion_Medica');
        $student->Fecha_Ingreso = $request->input('Fecha_Ingreso');
        $student->save();
    }

    public static function findId($id)
    {
        return Estudiante::find($id);
    }
}
