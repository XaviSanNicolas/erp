<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiante = Estudiante::all();

        return view('estudiantes', compact('estudiante'));
    }

    public function create()
    {
        return view('estudiante');
    }

    public function store(Request $request)
    {
        Estudiante::create($request->all());

        return redirect()->route('creado');
    }

    public function show(Estudiante $estudiante)
    {
        return view('estudiantes.show', compact('estudiante'));
    }

    public function edit(Estudiante $estudiante)
    {
        return view('estudiantes.edit', compact('estudiante'));
    }

    public function update(Request $request, Estudiante $estudiante)
    {
        $estudiante->update($request->all());

        return redirect()->route('estudiantes.index');
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();

        return redirect()->route('estudiantes.index');
    }
}
