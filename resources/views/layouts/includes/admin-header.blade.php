<header class="site-header container admin-header">
    <div class="logo">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('images/una-tinta-peque.png') }}" alt="Logo">
        </a>
        <div class="logo-info">
            <h1 class="logo-title">Panel de Administración</h1>
            <span class="muted">Gestión del sitio</span>
        </div>
    </div>

    <nav class="main-nav">
        <ul class="nav-list">
            <li><a href="{{ route('dashboard') }}">Inicio</a></li>
            <li><a href="{{ route('dashboard.articles') }}">Artículos</a></li>
            <li><a href="{{ route('orders.index') }}">Pedidos</a></li>
        </ul>
    </nav>

    <div class="iconos">
        <a href="{{ route('home') }}" class="button" title="Ir al sitio"><span class="material-icons">home</span></a>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="btn btn-ghost">Cerrar Sesión</button>
        </form>
        <span class="stack">
            <span class="material-icons">account_circle</span>
            <span>{{ Auth::user()->name }}</span>
        </span>
    </div>
</header>

@if (session('success'))
    <div id="flash-toast" class="flash-toast">
        <div class="flash-content">
            <strong>Éxito</strong>
            <p>{{ session('success') }}</p>
        </div>
        <button class="flash-close" aria-label="Cerrar">&times;</button>
    </div>
@endif
