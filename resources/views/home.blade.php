@extends('layouts.main')
@section('page-title', 'Juega Mucho | Inicio')
@section('main-content')
    <section>
        <div>
            <h1>Encuentra juguetes para todos las edades</h1>
            <p>Explora nuestra amplia gama de juguetes para niños de todas las edades. Desde los más pequeños hasta los más
                grandes, tenemos algo especial para cada etapa de la infancia.</p>
            <button><a href="{{ route('articles') }}">Explorar Juguetes</a></button>
        </div>
        <img src="" alt="niños jugando con juguetes">
    </section>
    <section>
        <h2>Categorías Destacadas</h2>
        <div>
            <div>
                <img src="" alt="juguete educativo">
                <h3>Juguetes Educativos</h3>
                <p>Fomenta el aprendizaje y la creatividad con nuestros juguetes educativos diseñados para estimular la
                    mente
                    de los niños.</p>
            </div>
            <div>
                <img src="" alt="juguete al aire libre">
                <h3>Juguetes al Aire Libre</h3>
                <p>Inspira la aventura y la diversión al aire libre con nuestra selección de juguetes perfectos para el
                    juego
                    exterior.</p>
            </div>
            <div>
                <img src="" alt="juguete de construcción">
                <h3>Juguetes de Construcción</h3>
                <p>Desarrolla habilidades motoras y la imaginación con nuestros juguetes de construcción que permiten a los
                    niños crear y construir sus propias aventuras.</p>
            </div>
        </div>
    </section>
@endsection
