@extends('layouts.admin')

@section('titulo')
<span>Estudiante</span>

<a href="" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#createMdl">
    <i class="fas fa-user-plus"></i>
</a>

@endsection

@section('contenido')


<div class="card">
    <div class="card-body">
        <table id="dt-cursos" class="table table-striped table-bordered dts">
            <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Id Persona</th>
                    <th class="text-center">Id Acudiente</th>
                    <th class="text-center">Rol</th>
                    <th class="text-center">Genero</th>
                    <th class="text-center">Fecha de Nacimiento</th>
                    <th class="text-center">Edad</th>
                    <th class="text-center">Nombre del Padre</th>
                    <th class="text-center">Nombre de la Madre</th>
                    <th class="text-center">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($estudiantes as $estudiante)
                <tr class="text-center">
                    <td>{{$estudiante->id }}</td>
                    <td>{{$estudiante->id_persona}}</td>
                    <td>{{$estudiante->id_acudiente}}</td>
                    <td>{{$estudiante->id_rol}}</td>
                    <td>{{$estudiante->genero}}</td>
                    <td>{{$estudiante->fecha_nacimiento}}</td>
                    <td>{{$estudiante->edad}}</td>
                    <td>{{$estudiante->nombre_padre}}</td>
                    <td>{{$estudiante->nombre_madre}}</td>
                    <td>{{$estudiante->estado}}</td>
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