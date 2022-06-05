@extends('layou.admin')

@section('titulo')
<span>Actividades</span>

<a href="" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#createMdl">
    <i class="fas fa-user-plus"></i>
</a>

@endsection

@section('contenido')



@endsection


@push('styles')
<link rel="stylesheet" href="{{asset('libs/datatables/dataTables.bootstrap4.min.css')}}">
@endpush

@push('scripts')
<script src="{{asset('/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>

@endpush