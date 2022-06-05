<?php

namespace App\Http\Controllers;


use App\Models\Asignacion_Docente;
Use App\Models\Usuario;
Use App\Models\Materia;
Use App\Models\Curso;
use Illuminate\Http\Request;

class Asignacion_DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $asignaciones_docentes = Asignacion_Docente::orderBy('id','DESC')->get();
        //dd($asignaciones_docentes);
        return view('asignaciones_docentes.index',["asignaciones_docentes"=>$asignaciones_docentes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios=Usuario::orderBy('id','DESC')
        -> select('users.id','users.name')
        -> get();

        $materias=Materia::orderBy('id','DESC')
        -> select('materias.id','materias.nombre')
        -> get();
        
        $cursos=Curso::orderBy('id','DESC')
        -> select('cursos.id','cursos.grado','cursos.anio_lectivo','cursos.consecutivo')
        -> get();

        return view('asignaciones_docentes.create')->with('usuarios',$usuarios)->with('materias',$materias)->with('curso',$cursos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignaciones_docentes=new Asignacion_Docente;
        $asignaciones_docentes->id_docente=$request->get('usuarios_id');
        $asignaciones_docentes->id_curso=$request->get('curso_id');
        $asignaciones_docentes->id_materias=$request->get('materias_id');
        $asignaciones_docentes->save();

        return redirect()->route('asignar_docente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios=Usuario::orderBy('id','DESC')
        -> select('users.id','users.name')
        -> get();

        $materias=Materia::orderBy('id','DESC')
        -> select('materias.id','materias.nombre')
        -> get();
        
        $cursos=Curso::orderBy('id','DESC')
        -> select('cursos.id','cursos.grado','cursos.anio_lectivo','cursos.consecutivo')
        -> get();

        return view('asignaciones_docentes.create')->with('usuarios',$usuarios)->with('materias',$materias)->with('curso',$cursos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignaciones_docentes=Asignacion_Docente::findOrFail($id);

        $usuarios=Usuario::orderBy('id','DESC')
        ->select('users.id','users.name')
        ->whereNotIn('users.id',[$asignaciones_docentes->id_docente])
        ->get();

        $materias=Materia::orderBy('id','DESC')
        -> select('materias.id','materias.nombre')
        ->whereNotIn('materias.id',[$asignaciones_docentes->id_materias])
        -> get();
        
        $cursos=Curso::orderBy('id','DESC')
        -> select('cursos.id','cursos.grado','cursos.anio_lectivo','cursos.consecutivo')
        -> whereNotIn('cursos.id',[$asignaciones_docentes->id_curso])
        -> get();

        return view('asignaciones_docentes.edit')->with("asignaciones_docentes",$asignaciones_docentes)->with('usuarios',$usuarios)->with('materias',$materias)->with('curso',$cursos);
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
        $asignaciones_docentes=Asignacion_Docente::findOrFail($id);
        $asignaciones_docentes->id_docente=$request->get('usuarios_id');
        $asignaciones_docentes->id_curso=$request->get('curso_id');
        $asignaciones_docentes->id_materias=$request->get('materias_id');
        $asignaciones_docentes->save();

        return redirect()->route('asignar_docente.index');
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
