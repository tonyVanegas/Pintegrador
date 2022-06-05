@extends('layouts.admin')

@section('titulo')
<span>Asiganar Docente</span>

<a class="btn btn-warning" href="{{ route('asignar_docente.create') }}">Nuevo</a>

@endsection

@section('contenido')


<div class="card">
    <div class="card-body">
        <table id="dt-asignaciones_docentes" class="table table-striped table-bordered dts">
            <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Docente</th>
                    <th class="text-center">Curso</th>
                    <th class="text-center">Materias</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($asignaciones_docentes as $asignacion_docente)
                <tr class="text-center">
                    <td>{{$asignacion_docente->id }}</td>
                    <td>{{$asignacion_docente->usuarios->name}}</td>
                    <td>{{$asignacion_docente->cursos->grado}}-{{$asignacion_docente->cursos->anio_lectivo}}-{{$asignacion_docente->cursos->consecutivo}}</td>
                    <td>{{$asignacion_docente->materias->nombre}}</td>
                    <td>
                    <a class="btn btn-info" href="{{ route('asignar_docente.edit',$asignacion_docente->id) }}">Editar</a>
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