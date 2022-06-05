<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <br><br>
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-0">
            <img src="{{ asset ('/img/santa-fe.png') }}" alt="imagen-logo" style="height: 250px; width: 300px;">
        </div>
    </a>
    <br>
    <div class="sidebar-brand-text mx-3">
        <p style="color:#FACA02";>Jardin infantil Santa Fe</p></div>

    <!-- Divider -->

    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Gestión Humana
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
            aria-controls="collapseOne">
            <i class="fas fa-fw fa-cog"></i>
            <span>Administración y Cuentas</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">docentes y acudientes</h6>
                <a class="collapse-item" href="{{route('usuarios.index')}}">
                    <i class="fas fa-users fa-fw"></i> Usuarios
                </a>
                <a class="collapse-item" href="{{route('roles.index')}}">
                    <i class="fas fa-id-card fa-fw"></i> Roles
                </a>
                <h6 class="collapse-header">otros:</h6>
                <a class="collapse-item" href="{{route('estudiantes.index')}}">
                    <i class="fas fa-address-book"></i> Estudiantes
                </a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Gestion Academica
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
            aria-controls="collapseThree">
            <i class="fas fa-fw fa-cog"></i>
            <span>Crear</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Nuevo:</h6>
                <a class="collapse-item" href="{{route('cursos.index')}}">
                    <i class="fas fa-archway"></i> Curso
                </a>
                <a class="collapse-item" href="{{route('materias.index')}}">
                    <i class="fas fa-book"></i> Materia
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
            aria-controls="collapseFour">
            <i class="fas fa-fw fa-cog"></i>
            <span>Cargar</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">generar carga:</h6>
                <a class="collapse-item" href="{{route('asignar_docente.index')}}">
                    Docente
                </a>
                <a class="collapse-item" href="{{route('asignar_estudiante.index')}}">
                    Estudiante
                </a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->