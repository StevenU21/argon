<div class="collapse navbar-collapse" id="sidenav-collapse-main">
    <!-- Collapse header -->
    <div class="navbar-collapse-header d-md-none">
        <div class="row">
            <div class="col-6 collapse-brand">
                <a href="#">
                    <img src="{{ asset('img/brand/blue.png') }}">
                </a>
            </div>
            <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                    aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <ul class="navbar-nav">
        <li class="nav-item {{ Request::route()->named('dashboard') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('dashboard') ? 'active' : '' }}"
                href="{{ route('dashboard') }}" wire:navigate>
                <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
        </li>
    </ul>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Panel de Administración</h6>
    <ul class="navbar-nav">
        <li class="nav-item {{ Request::route()->named('ejemplo.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('ejemplo.index') ? 'active' : '' }}"
                href="{{ route('ejemplo.index') }}" wire:navigate>
                <i class="fas fa-book text-green"></i> Ejemplo
            </a>
        </li>
    </ul>
    <!-- Divider -->
    <hr class="my-3">
    <!-- Heading -->
    <h6 class="navbar-heading text-muted">Otras Acciones</h6>
    <!-- Navigation -->
    <ul class="navbar-nav mb-md-3">
        <li class="nav-item {{ Request::route()->named('posts.index') ? 'active' : '' }}">
            <a class="nav-link {{ Request::route()->named('posts.index') ? 'active' : '' }}"
                href="{{ route('posts.index') }}" wire:navigate>
                <i class="ni ni-single-02 text-red"></i> Posts
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt text-gray"></i> Cerrar Sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

</div>