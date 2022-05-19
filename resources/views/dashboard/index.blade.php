@extends('layouts.admin')

@section('titulo', 'Panel-adminsistrativo')

@section('contenido')

<div class="row" justify-content: center>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <h5>Usuarios</h5>
                        @php
                        use App\Models\User;
                        $cant_usuarios = User::count();
                        @endphp
                        <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                        <p class="m-b-0 text-right"><a href="/usuarios" class="text-blue">Ver más</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <h5>Roles</h5>
                        @php
                        use Spatie\Permission\Models\Role;
                        $cant_roles = Role::count();
                        @endphp
                        <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{$cant_roles}}</span></h2>
                        <p class="m-b-0 text-right"><a href="/roles" class="text-blue">Ver más</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection