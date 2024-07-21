<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        $docentes = Docente::all();

        return view('docentes.index', compact('docentes'));
    }

    public function create()
    {
        return view('docentes.create');
    }

    public function store(Request $request)
    {
        Docente::create($request->all());

        return redirect()->route('docentes.index');
    }

    public function show(Docente $docente)
    {
        return view('docentes.show', compact('docentes'));
    }

    public function edit(Docente $docente)
    {
        return view('docentes.edit', compact('docentes'));
    }

    public function update(Request $request, Docente $docente)
    {
        $docente->update($request->all());

        return redirect()->route('docentes.index');
    }

    public function destroy(Docente $docente)
    {
        $docente->delete();

        return redirect()->route('docentes.index');
    }
}
