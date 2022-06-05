<?php

namespace App\Http\Controllers;

use App\Models\Asignacion_Estudiante;
use App\Models\Curso;
use App\Models\Estudiante;
use App\Models\Materia;
use Illuminate\Http\Request;

class Asignacion_EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaciones_estudiantes = Asignacion_Estudiante::orderBy('id','DESC')->get(); 
        return view('asignaciones_estudiantes.index',["asignaciones_estudiantes"=>$asignaciones_estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiante=Estudiante::orderBy('id','DESC')
        -> select('estudiantes.id','estudiantes.nombres')
        -> get();

        $materias=Materia::orderBy('id','DESC')
        -> select('materias.id','materias.nombre')
        -> get();
        
        $cursos=Curso::orderBy('id','DESC')
        -> select('cursos.id','cursos.grado','cursos.anio_lectivo','cursos.consecutivo')
        -> get();

        return view('asignaciones_estudiantes.create')->with('estudiantes',$estudiante)->with('materias',$materias)->with('curso',$cursos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignaciones_estudiantes=new Asignacion_Estudiante;
        $asignaciones_estudiantes->id_estudiante=$request->get('estudiantes_id');
        $asignaciones_estudiantes->id_cursos=$request->get('curso_id');
        $asignaciones_estudiantes->id_materias=$request->get('materias_id');
        $asignaciones_estudiantes->save();

        return redirect()->route('asignar_estudiante.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignaciones_estudiantes=Asignacion_Estudiante::findOrFail($id);

        $estudiante=Estudiante::orderBy('id','DESC')
        -> select('estudiantes.id','estudiantes.nombres')
        ->whereNotIn('estudiantes.id',[$asignaciones_estudiantes->id_estudiante])
        -> get();

        $materias=Materia::orderBy('id','DESC')
        -> select('materias.id','materias.nombre')
        ->whereNotIn('materias.id',[$asignaciones_estudiantes->id_materias])
        -> get();
        
        $cursos=Curso::orderBy('id','DESC')
        -> select('cursos.id','cursos.grado','cursos.anio_lectivo','cursos.consecutivo')
        -> whereNotIn('cursos.id',[$asignaciones_estudiantes->id_cursos])
        -> get();

        return view('asignaciones_estudiantes.edit')->with("asignaciones_estudiantes",$asignaciones_estudiantes)->with('estudiante',$estudiante)->with('materias',$materias)->with('curso',$cursos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asignaciones_estudiantes=Asignacion_Estudiante::findOrFail($id);
        $asignaciones_estudiantes->id_estudiante=$request->get('estudiantes_id');
        $asignaciones_estudiantes->id_cursos=$request->get('curso_id');
        $asignaciones_estudiantes->id_materias=$request->get('materias_id');
        $asignaciones_estudiantes->save();

        return redirect()->route('asignar_estudiante.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
