<header class="site-header container">
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/positivo-peque.png') }}" alt="Logo">
        </a>
    </div>
    <nav class="main-nav">
        <ul class="nav-list">
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ route('articles') }}">Descubre</a></li>
            <li><a href="{{ route('contact') }}">Contacto</a></li>
            @role('admin')
                <li><a href="{{ route('dashboard') }}" class="for-admin">Panel Admin</a></li>
            @endrole
        </ul>
    </nav>

    <div class="iconos">
        <a href="{{ route('articles') }}" class="button"><span class="material-icons">search</span></a>
        @auth
            <a href="{{ route('cart.index') }}" class="button"><span class="material-icons">shopping_cart</span></a>
        @endauth
        @auth
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-ghost">Cerrar Sesión</button>
            </form>
            <span class="stack">
                <span class="material-icons">account_circle</span>
                <span>{{ Auth::user()->name }}</span>
            </span>
        @else
            <a href="{{ route('login') }}" class="btn btn-ghost">Iniciar Sesión</a>
            <a href="{{ route('register') }}" class="btn btn-primary" style="color: white">Registrarse</a>
        @endauth
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
