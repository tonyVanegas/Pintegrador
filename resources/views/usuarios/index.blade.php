@extends('layouts.admin')

@section('titulo')
<span>Usuario</span>

<a class="btn btn-warning" href="{{ route('usuarios.create') }}">Nuevo</a>
@endsection

@section('contenido')

<div class="card">
    <div class="card-body">
        <table id="dt-usuarios" class="table table-striped table-bordered dts">
            <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Correo Electronico</th>
                    <th class="text-center">Rol</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr class="text-center">
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->email}}</td>
                    <td>
                        @if(!empty($usuario->getRoleNames()))
                        @foreach($usuario->getRoleNames() as $rolNombre)
                        <h5><span class="badge badge-dark">{{$rolNombre}}</span></h5>
                        @endforeach
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-info" href="{{ route('usuarios.edit',$usuario->id) }}">Editar</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy',
                        $usuario->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
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