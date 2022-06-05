<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Usuarios</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h4 class="text-center">Jardin Infantil Santa Fe</h4>
        </div>
        <div class="row">
            <h3 class="text-center">Reporte de Usuarios</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Celular</th>
                        <th>Telefono Fijo</th>
                        <th>Correo Electronico</th>
                        <th>Rol</th>
                        <th>Estado</th>
                    </thead>
                    <tbody> @foreach($usuarios as $usuario) <tr>
                            <td>{{$usuario->id}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->direccion}}</td>
                            <td>{{$usuario->celular}}</td>
                            <td>{{$usuario->telefono_fijo}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>
                                @if(!empty($usuario->getRoleNames()))
                                @foreach($usuario->getRoleNames() as $rolNombre)
                                <h5><span class="badge badge-dark">{{$rolNombre}}</span></h5>
                                @endforeach
                                @endif
                            </td>
                            <td>{{$usuario->estado}}</td>
                        </tr> @endforeach </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</body>

</html>