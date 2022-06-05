@extends('layout.admin')

@section('titulo')
<span>Personas</span>

<a href="" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#createMdl">
    <i class="fas fa-user-plus"></i>
</a>

@endsection

@section('contenido')

@include('personas.modals.create')
@include('personas.modals.update')



<div class="card">
    <div class="card-body">
        <table id="dt-personas" class="table table-striped table-bordered dts">
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

<script>
function editPersona(persona) {
    $("#editPersonaFrm").attr('action', `/personas/${persona.id}`);

    $("#editPersonaFrm #tipo_documento").val(persona.tipo_documento);
    $("#editPersonaFrm #numero_documento").val(persona.numero_documento);
    $("#editPersonaFrm #nombres").val(persona.nombres);
    $("#editPersonaFrm #primer_apellido").val(persona.primer_apellido);
    $("#editPersonaFrm #segundo_apellido").val(persona.segundo_apellido)
}
</script>

@if(!$errors->isEmpty())
@if($errors->has('post'))
<script>
$(function() {
    $('#createMdl').modal('show');
});
</script>
@else
<script>
$(function() {
    $('#editMdl').modal('show');
});
</script>
@endif
@endif

@endpush