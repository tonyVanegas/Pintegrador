<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fab fa-twitter"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Mi Agenda <sup>App</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Inicio</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Configuración
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Administración</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Listado del personal:</h6>
                <a class="collapse-item" href="{{route('personas.index')}}">
                    <i class="fas fa-address-book"></i> Personal
                </a>
                <h6 class="collapse-header">Usuarios y Roles:</h6>
                <a class="collapse-item" href="{{route('usuarios.index')}}">
                    <i class="fas fa-users fa-fw"></i> Usuarios
                </a>
                <a class="collapse-item" href="#">
                    <i class="fas fa-id-card fa-fw"></i> Roles
                </a>
                <h6 class="collapse-header">Crear:</h6>
                <a class="collapse-item" href="{{route('docentes.index')}}"></i> Docente
                </a>
                <a class="collapse-item" href="{{route('acudientes.index')}}">
                    <i class="fas fa-user-chart"></i> Acudiente
                </a>
                <a class="collapse-item" href="{{route('estudiantes.index')}}">
                    <i class="fas fa-user-chart"></i> Estudiante
                </a>
                <a class="collapse-item" href="{{route('cursos.index')}}">
                    <i class="fas fa-archway"></i> Cursos
                </a>
                <a class="collapse-item" href="{{route('materias.index')}}">
                    <i class="fas fa-book"></i> Materias
                </a>
                <a class="collapse-item" href="#">
                    <i class="fas fa-user-chart"></i> Estado del Usuario
                </a>
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Asignar</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">
                    Docente
                </a>
                <a class="collapse-item" href="#">
                    Materia
                </a>
                <a class="collapse-item" href="#">
                    Carga Docente
                </a>
                <a class="collapse-item" href="#">
                    Carga Estudiante
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