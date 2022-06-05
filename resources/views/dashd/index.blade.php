@extends('layout.admin')

@section('titulo', 'Panel-Docente')

@section('contenido')

<div class="row" justify-content: center>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <h5>Actividades</h5>
                        @php
                        use App\Models\Blog;
                        $cant_blogs = Blog::count();
                        @endphp
                        <h2 class="text-right"><i class="fa fa-blog f-left"></i><span>{{$cant_blogs}}</span></h2>
                        <p class="m-b-0 text-right"><a href="/blogs" class="text-blue">Ver más</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>

@endsection