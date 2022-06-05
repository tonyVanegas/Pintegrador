@extends('layouts.admin')

@section('contenido')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Editar Asignación Estudiantes</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        @if ($errors->any())
                        <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                            @foreach ($errors->all() as $error)
                            <span class="badge badge-danger">{{ $error }}</span>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

    {!! Form::model($asignaciones_estudiantes, ['method' => 'PATCH','route' => ['asignar_estudiante.update', $asignaciones_estudiantes->id]]) !!}
    
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
                <div class="form-group"> <label for="estudiantes_id">Estudiante</label> <select name="estudiantes_id" id="estudiantes_id" class="form-control selectpicker" data-livesearch="true" required>
                        <option value="{{$asignaciones_estudiantes->estudiante_id}}" selected>{{$asignaciones_estudiantes->estudiantes->nombres}}</option> 
                        @foreach($estudiante as $estudiantes)
                        <option value="{{$estudiantes->id}}">{{$estudiantes->nombres}}</option> 
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
                <div class="form-group"> <label for="curso_id">Curso</label> <select name="curso_id" id="curso_id" class="form-control selectpicker" data-livesearch="true" required>
                        <option value="{{$asignaciones_estudiantes->curso_id}}" selected>{{$asignaciones_estudiantes->cursos->grado}}-{{$asignaciones_estudiantes->cursos->anio_lectivo}}-{{$asignaciones_estudiantes->cursos->consecutivo}}</option> 
                        @foreach($curso as $cursos)
                        <option value="{{$cursos->id}}">{{$cursos->grado}}-{{$cursos->anio_lectivo}}-{{$cursos->consecutivo}}</option> 
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
                <div class="form-group"> <label for="materias_id">Materias</label> <select name="materias_id" id="materias_id" class="form-control selectpicker" data-livesearch="true" required>
                        <option value="{{$asignaciones_estudiantes->materias_id}}" selected>{{$asignaciones_estudiantes->materias->nombre}}</option> 
                        @foreach($materias as $materia)
                        <option value="{{$materia->id}}">{{$materia->nombre}}</option> 
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    

    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group"> 
            <br> <button type="submit" class="btn btn-primary">Guardar</button>
            <button class="btn btn-danger" type="reset">
                <span class="glyphicon glyphicon-remove">

                </span> Vaciar Campos</button>
                <a class="btn btn-info" type="reset" href="{{url('asignar_estudiante')}}">
                
                <span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>

    {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection