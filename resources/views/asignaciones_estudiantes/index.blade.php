@extends('layouts.admin')

@section('titulo')
<span>Asiganar Estudiante</span>

<a class="btn btn-warning" href="{{ route('asignar_estudiante.create') }}">Nuevo</a>

@endsection

@section('contenido')


<div class="card">
    <div class="card-body">
        <table id="dt-asignaciones_estudiantes" class="table table-striped table-bordered dts">
            <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Estudiante</th>
                    <th class="text-center">Curso</th>
                    <th class="text-center">Materias</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($asignaciones_estudiantes as $asignacion_estudiante)
                <tr class="text-center">
                    <td>{{$asignacion_estudiante->id}}</td>
                    <td>{{$asignacion_estudiante->estudiantes->nombres}}</td>
                    <td>{{$asignacion_estudiante->cursos->grado}}-{{$asignacion_estudiante->cursos->anio_lectivo}}-{{$asignacion_estudiante->cursos->consecutivo}}</td>
                    <td>{{$asignacion_estudiante->materias->nombre}}</td>
                    <td>
                    <a class="btn btn-info" href="{{ route('asignar_estudiante.edit',$asignacion_estudiante->id) }}">Editar</a>
                        <a href="" class="delete-form-data" data-toggle="modal" data-target="#deleteMdl">
                            <i class="fas fa-ban"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection


@push('styles')
<link rel="stylesheet" href="{{asset('libs/datatables/dataTables.bootstrap4.min.css')}}">
@endpush

@push('scripts')
<script src="{{asset('/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>

@endpush