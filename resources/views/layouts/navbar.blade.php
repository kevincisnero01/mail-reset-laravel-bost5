<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<!-- Container wrapper -->
<div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="https://mdbgo.com/">
        <img
        src="https://laravel.com/img/logomark.min.svg"
        height="16"
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px;"
        />
    </a>

    <!-- Toggle button -->
    <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <i class="fas fa-bars"></i>
    </button>

    <!-- Left links -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">

    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="/">Inicio</a>
        </li>
        @auth
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">Panel de Control</a>
        </li>
        @endauth
    </ul>

    <!-- Right links -->
    <div class="d-flex align-items-center">
        @guest
        <a href="{{ route('login.request') }}" class="btn btn-link px-3 me-2 text-white">
            Iniciar Sesion
        </a>
        <a href="#" class="btn btn-primary me-3">
            Registrar
        </a>
        @endguest
        @auth
        <form action="logout" method="post" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-secondary me-3">Cerrar Sesión</button>
        </form>
        @endauth
    </div>

    </div>

</div>
<!-- Container wrapper -->
</nav>
<!-- Navbar -->
