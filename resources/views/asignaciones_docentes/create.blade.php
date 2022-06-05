@extends('layouts.admin')

@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo Asignación Docente</h3> @if (count($errors)>0) <div class="alert alert-danger">
            <ul> @foreach ($errors->all() as $error) <li>{{$error}}</li> @endforeach </ul>
        </div> @endif
    </div>
</div>
{!! Form::open(array('route' => 'asignar_docente.store','method'=>'POST')) !!}
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
                <div class="form-group"> <label for="usuarios_id">Docente</label> <select name="usuarios_id" id="usuarios_id" class="form-control selectpicker" data-livesearch="true" required>
                        <option value="" disabled selected>Docente</option> @foreach($usuarios as $usuario)
                        <option value="{{$usuario->id}}">{{$usuario->name}}</option> @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
                <div class="form-group"> <label for="curso_id">Curso</label> <select name="curso_id" id="curso_id" class="form-control selectpicker" data-livesearch="true" required>
                        <option value="" disabled selected>Curso</option> @foreach($curso as $cursos)
                        <option value="{{$cursos->id}}">{{$cursos->grado}}-{{$cursos->anio_lectivo}}-{{$cursos->consecutivo}}</option> @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
                <div class="form-group"> <label for="materias_id">Materia</label> <select name="materias_id" id="materias_id" class="form-control selectpicker" data-livesearch="true" required>
                        <option value="" disabled selected>Materia</option> @foreach($materias as $materia)
                        <option value="{{$materia->id}}">{{$materia->nombre}}</option> @endforeach
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
                <a class="btn btn-info" type="reset" href="{{url('asignar_docente')}}">
                
                <span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>
{!!Form::close()!!}
@endsection

            
@push('styles')
<link rel="stylesheet" href="{{asset('libs/datatables/dataTables.bootstrap4.min.css')}}">
@endpush

@push('scripts')
<script src="{{asset('/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>

@endpush