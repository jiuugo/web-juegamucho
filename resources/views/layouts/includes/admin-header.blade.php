<header>
    <div class="logo">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('images/una-tinta-peque.png') }}" alt="Logo">
        </a>
        <h1>Panel de Administración</h1>
    </div>
    <nav>
        <ul>
            <li><a href="{{ route('dashboard') }}">Inicio</a></li>
            <li><a href="{{ route('dashboard.articles') }}">Gestión de Articulos</a></li>
            <li><a href="{{ route('orders.index') }}">Pedidos</a></li>
            <li><a href="{{ route('home') }}">Volver al Sitio</a></li>
        </ul>
    </nav>
    <div>
        <span>
            <span class="material-icons">
                account_circle
            </span>
            <span>{{ Auth::user()->name }}</span>
        </span>
        <form action="" method="post">
            @csrf
            <button type="submit">Cerrar Sesión</button>
        </form>
    </div>
</header>
