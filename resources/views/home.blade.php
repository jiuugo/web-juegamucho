@extends('layouts.main')
@section('page-title', 'Juega Mucho | Inicio')
@section('main-content')
    <section class="home-hero">
        <div class="container hero-inner">
            <div class="hero-content">
                <h1 class="hero-title">Encuentra juguetes para todas las edades</h1>
                <p class="hero-subtitle">Explora nuestra amplia gama de juguetes para niños de todas las edades. Desde los
                    más pequeños hasta los más grandes, tenemos algo especial para cada etapa de la infancia.</p>
                <a href="{{ route('articles') }}" class="btn btn-primary btn-cta">Explorar Juguetes</a>
            </div>
            <div class="hero-media">
                <img src="{{ asset('images/extras/Nino_jugando.jpg') }}" alt="niños jugando con juguetes" class="hero-image">
            </div>
        </div>
    </section>

    <section class="home-categories container">
        <h2 class="section-title">Categorías Destacadas</h2>
        <div class="categories-grid">
            <article class="category-card card">
                <a href="{{ route('articles.index', ['category' => 5]) }}">
                    <img src="{{ asset('images/extras/educativo.jpg') }}" alt="juguete educativo" class="category-image">
                    <h3>Juguetes Educativos</h3>
                    <p>Fomenta el aprendizaje y la creatividad con nuestros juguetes educativos diseñados para estimular la
                        mente de los niños.</p>
                </a>
            </article>
            <article class="category-card card">
                <a href="{{ route('articles.index', ['category' => 7]) }}">
                    <img src="{{ asset('images/extras/aire-libre.jpg') }}" alt="juguete al aire libre"
                        class="category-image">
                    <h3>Juguetes al Aire Libre</h3>
                    <p>Inspira la aventura y la diversión al aire libre con nuestra selección de juguetes perfectos para el
                        juego exterior.</p>
                </a>
            </article>
            <article class="category-card card">
                <a href="{{ route('articles.index', ['category' => 1]) }}">
                    <img src="{{ asset('images/extras/construccion.jpg') }}" alt="juguete de construcción"
                        class="category-image">
                    <h3>Juguetes de Construcción</h3>
                    <p>Desarrolla habilidades motoras y la imaginación con nuestros juguetes de construcción que permiten a
                        los
                        niños crear y construir sus propias aventuras.</p>
                </a>
            </article>
        </div>
    </section>

@endsection
