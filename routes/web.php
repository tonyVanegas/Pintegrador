<?php


use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\ProgresoController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\Asignacion_EstudianteController;
use App\Http\Controllers\Asignacion_DocenteController;
use App\Http\Controllers\AcudienteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\DashaController;
use App\Http\Controllers\DashdController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard-admin', [DashboardController::class,'index'])->name('dashboard'); 
Route::get('/dashboard-doc', [DashdController::class,'index'])->name('dashd'); 
Route::get('/dashboard', [DashaController::class,'index'])->name('dasha'); 



Route::resource('/personas', PersonaController::class);
Route::resource('/usuarios', UsuarioController::class);
Route::resource('/cursos', CursoController::class);
Route::resource('/materias', MateriaController::class);
Route::resource('/acudientes', AcudienteController::class);
Route::resource('/estudiantes', EstudianteController::class);
Route::resource('/docentes', DocenteController::class);
Route::resource('/asignar_docente', Asignacion_DocenteController::class);
Route::resource('/asignar_estudiante', Asignacion_EstudianteController::class);
Route::resource('/actividades', ActividadController::class);
Route::resource('/asistencias', AsistenciaController::class);
Route::resource('/progreso', ProgresoController::class);
Route::resource('/notificaciones', NotificacionController::class);





/* ADMINISTRACIÓN DE USUARIOS */

//Route::resource('dashboard', 'App\http\Controllers\dashboardController');
//Route::resource('personas', 'App\http\Controllers\PersonaController');




