@extends('layouts.admin')

@section('titulo')
<span>Docente</span>

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
                    <th class="text-center">Id persona</th>
                    <th class="text-center">Id rol</th>
                    <th class="text-center">Dirección</th>
                    <th class="text-center">Celular</th>
                    <th class="text-center">Telefono Fijo</th>
                    <th class="text-center">Correo</th>
                    <th class="text-center">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($docentes as $docente)
                <tr class="text-center">
                    <td>{{$docente->id }}</td>
                    <td>{{$docente->id_persona}}</td>
                    <td>{{$docente->id_rol}}</td>
                    <td>{{$docente->direccion}}</td>
                    <td>{{$docente->celular}}</td>
                    <td>{{$docente->telefono_fijo}}</td>
                    <td>{{$docente->correo}}</td>
                    <td>{{$docente->estado}}</td>
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