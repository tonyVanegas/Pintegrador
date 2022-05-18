@extends('layouts.admin')

@section('titulo')
<span>Asiganar Docente</span>

<a href="" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#createMdl">
    <i class="fas fa-user-plus"></i>
</a>

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
                </tr>
            </thead>
            <tbody>
                @foreach($asignaciones_docentes as $asignacion_docente)
                <tr class="text-center">
                    <td>{{$asignacion_docente->id }}</td>
                    <td>{{$asignacion_docente->id_docente}}</td>
                    <td>{{$asignacion_docente->id_curso}}</td>
                    <td>{{$asignacion_docente->id_materias}}</td>
                    <td>
                        <a href="" class="edit-form-data" data-toggle="modal" data-target="#editMdl"
                            onclick="#">
                            <i class="far fa-edit"></i>
                        </a>
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