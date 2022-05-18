@extends('layouts.admin')

@section('titulo')
<span>Roles</span>

<a href="" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#createMdl">
    <i class="fas fa-plus"></i>
</a>
@endsection

@section('contenido')





<div class="card">
    <div class="card-body">
        <table id="dt-persons" class="table table-striped table-bordered dts">
            <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Tipo de Documento</th>
                    <th class="text-center">Numero de Documento</th>
                    <th class="text-center">Nombres</th>
                    <th class="text-center">Primer Apellido</th>
                    <th class="text-center">Segundo Apellido</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personas as $persona)
                <tr class="text-center">
                    <td>{{$persona->id }}</td>
                    <td>{{$persona->tipo_documento}}</td>
                    <td>{{$persona->numero_documento}}</td>
                    <td>{{$persona->nombres}}</td>
                    <td>{{$persona->primer_apellido}}</td>
                    <td>{{$persona->segundo_apellido}}</td>
                    <td>
                        <a href="" class="edit-form-data" data-toggle="modal" data-target="#editMdl"
                            onclick="editPersona({{$persona}})">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="" class="delete-form-data" data-toggle="modal" data-target="#deleteMdl">
                            <i class="far fa-trash-alt"></i>
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