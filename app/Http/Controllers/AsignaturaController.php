<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index()
    {
        $asignatura = Asignatura::all();

        return view('asignaturas', compact('asignatura'));
    }

    public function create()
    {
        return view('asignatura');
    }

    public function store(Request $request)
    {
        Asignatura::create($request->all());

        return redirect()->route('creado');
    }

    public function show(Asignatura $asignatura)
    {
        return view('asignaturas.show', compact('asignatura'));
    }

    public function edit(Asignatura $asignatura)
    {
        return view('asignaturas.edit', compact('asignatura'));
    }

    public function update(Request $request, Asignatura $asignatura)
    {
        $asignatura->update($request->all());

        return redirect()->route('asignaturas.index');
    }

    public function destroy(Asignatura $asignatura)
    {
        $asignatura->delete();

        return redirect()->route('asignaturas.index');
    }
}
