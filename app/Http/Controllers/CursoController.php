<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $docentes = Curso::all();

        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        Curso::create($request->all());

        return redirect()->route('cursos.index');
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('cursos'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('cursos'));
    }

    public function update(Request $request, Curso $curso)
    {
        $curso->update($request->all());

        return redirect()->route('cursos.index');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}