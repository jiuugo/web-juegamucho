<header>
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/positivo-peque.png') }}" alt="Logo">
        </a>
    </div>

    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Inicio</a></li>
            <li><a href="{{ route('articles') }}">Descubre</a></li>
            <li><a href="">Contacto</a></li>
            @role('admin')
                <li><a href="{{ route('dashboard') }}">Panel Admin</a></li>
            @endrole
        </ul>
    </nav>

    <div class="iconos">
        <span class="material-icons">search</span>
        <span class="material-icons">shopping_cart</span>
        @auth
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
        @else
            <a href="{{ route('login') }}">Iniciar Sesión</a>
            <a href="{{ route('register') }}">Registrarse</a>
        @endauth
    </div>

</header>
