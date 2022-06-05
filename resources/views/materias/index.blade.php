@extends('layouts.admin')

@section('titulo')
<span>Materias</span>

<a href="" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#createMdl">
    <i class="fas fa-user-plus"></i>
</a>


@endsection

@section('contenido')

@include('materias.modals.create')

<div class="card">
    <div class="card-body">
        <table id="dt-materias" class="table table-striped table-bordered dts">
            <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Nombres</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($materias as $materia)
                <tr class="text-center">
                    <td>{{$materia->id}}</td>
                    <td>{{$materia->nombre}}</td>
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