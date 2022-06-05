@extends('layout.admin')

@section('titulo')
<span>Actividades</span>

@can('crear-blog')
<a class="btn btn-warning" href="{{ route('blogs.create') }}">Nuevo</a>
@endcan

@endsection

@section('contenido')



<table class="table table-striped mt-2">
    <thead style="background-color:#6777ef">
        <th style="display: none;">ID</th>
        <th style="color:#fff;">Titulo</th>
        <th style="color:#fff;">Contenido</th>
        <th style="color:#fff;">Acciones</th>
    </thead>
    <tbody>
        @foreach ($blogs as $blog)
        <tr>
            <td style="display: none;">{{ $blog->id }}</td>
            <td>{{ $blog->titulo }}</td>
            <td>{{ $blog->contenido }}</td>
            <td>
                <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
                    @can('editar-blog')
                    <a class="btn btn-info" href="{{ route('blogs.edit',$blog->id) }}">Editar</a>
                    @endcan

                    @csrf
                    @method('DELETE')
                    @can('borrar-blog')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection


@push('styles')
<link rel="stylesheet" href="{{asset('libs/datatables/dataTables.bootstrap4.min.css')}}">
@endpush

@push('scripts')
<script src="{{asset('/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>

@endpush