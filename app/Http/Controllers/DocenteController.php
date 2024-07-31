<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Support\Facades\Session;
use  Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DocenteController extends Controller
{
    public function index()
    {
        $docente = Docente::all();

        return view('docentes', compact('docente'));
    }

    public function create()
    {
        return view('docente');
    }

    public function store(Request $request)
    {
        Docente::create($request->all());

        return redirect()->route('exitoTeacher');
    }

    public function show(Docente $docente)
    {
        return view('docentes.show', compact('docente'));
    }

    public function edit(Docente $docente)
    {
        return view('docentes.edit', compact('docente'));
    }

    public function update(Request $request, Docente $docente)
    {
        $docente->update($request->all());

        return redirect()->route('docentes.index');
    }

    public function updateTeacher($id)
    {
        $teacher = Docente::findId($id);
        Session::put('id', $id);
        return view('updateTeacher', compact('teacher'));
    }
    public function updatedTeacher(Request $request)
    {
        $id = Session::get('id');
        Docente::updatedTeacher($id, $request);
        return Redirect::to('/teacherDetail');
    }

    public function teacherDetail()
    {
        $id = Session::get('id');
        $teacher = Docente::findId($id);
        return view('teacherDetail', compact('teacher'));
    }

    public function destroy(Docente $docente)
    {
        $docente->delete();

        return redirect()->route('docentes.index');
    }
}
