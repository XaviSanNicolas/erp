<?php

use App\Models\Estudiante;
use App\Models\Docente;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\DocenteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/prueba', function () {
    return [
        'title' => 'titulito',
        'description' => 'descripcion cualquiera',
    ];
})-> name('prueba');
Route::match(['get', 'post'],'/estudiantes', [EstudianteController::class,'index']);
Route::get('/estudiante', [EstudianteController::class,'create']);
Route::post('/studentCreated', [EstudianteController::class,'store']) -> name('insertStudent');
Route::get('/exitoStudent', function(){ return view('studentCreated');})-> name('exitoStudent');
Route::get('/updateStudent/{id}', [EstudianteController::class, 'updateStudent'])->name('updateStudent');
Route::post('/updatedStudent', [EstudianteController::class, 'updatedStudent'])->name('updatedStudent');
Route::get('/studentDetail', [EstudianteController::class, 'studentDetail'])->name('studentDetail');

Route::match(['get', 'post'],'/docentes', [DocenteController::class,'index']);
Route::get('/docente', [DocenteController::class,'create']);
Route::post('/teacherCreated', [DocenteController::class,'store']) -> name('insertTeacher');
Route::get('/exitoTeacher', function(){ return view('teacherCreated');})-> name('exitoTeacher');
Route::get('/updateTeacher/{id}', [DocenteController::class, 'updateTeacher'])->name('updateTeacher');
Route::post('/updatedTeacher', [DocenteController::class, 'updatedTeacher'])->name('updatedTeacher');
Route::get('/teacherDetail', [DocenteController::class, 'teacherDetail'])->name('teacherDetail');


