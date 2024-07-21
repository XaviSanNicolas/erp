<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Support\Facades\Session;
use  Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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

        return redirect()->route('exito');
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

    public function updateStudent($id)
    {
        $student = Estudiante::findId($id);
        Session::put('id', $id);
        return view('updateStudent', compact('student'));
    }
    public function updatedStudent(Request $request)
    {
        $id = Session::get('id');
        Estudiante::updatedStudent($id, $request);
        return Redirect::to('/studentDetail');
    }

    public function studentDetail()
    {
        $id = Session::get('id');
        $student = Estudiante::findId($id);
        return view('studentDetail', compact('student'));
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();

        return redirect()->route('estudiantes.index');
    }
}
