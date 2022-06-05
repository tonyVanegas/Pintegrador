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
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\DashaController;
use App\Http\Controllers\DashdController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard-admin', [DashboardController::class,'index'])->name('dashboard'); 
Route::get('/dashboard-doc', [DashdController::class,'index'])->name('dashd'); 
Route::get('/dashboard', [DashaController::class,'index'])->name('dasha'); 


Route::group(['middleware' => ['auth']], function(){
Route::resource('/personas', PersonaController::class);
Route::resource('/usuarios', UsuarioController::class);
Route::resource('/roles', RolController::class);
Route::resource('/cursos', CursoController::class);
Route::resource('/materias', MateriaController::class);
Route::resource('/acudientes', AcudienteController::class);
Route::resource('/estudiantes', EstudianteController::class);
Route::resource('/docentes', DocenteController::class);
Route::resource('/asignar_docente', 'App\http\Controllers\Asignacion_DocenteController');
Route::resource('/asignar_estudiante', Asignacion_EstudianteController::class);
Route::resource('/actividades', ActividadController::class);
Route::resource('/asistencias', AsistenciaController::class);
Route::resource('/progreso', ProgresoController::class);
Route::resource('/blogs', BlogController::class);
Route::resource('/notificaciones', NotificacionController::class);
Route::get('imprimirUsuarios','App\http\Controllers\PdfController@imprimirUsuarios')->name('imprimirUsuarios');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
