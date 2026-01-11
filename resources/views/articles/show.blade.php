@extends('layouts.main')
@section('page-title', 'Juega Mucho | ' . $article->name)
@section('main-content')
    <div class="card">
        <div class="row-start">
            <div class="media-col">
                <img src="{{ asset('images/articulos/' . $article->image) }}" alt="{{ $article->name }}" class="article-image">
            </div>
            <div class="flex-1">
                <h1>{{ $article->name }}</h1>
                <p class="muted">Marca: {{ $article->brand->name }} · Categoría: {{ $article->category->name }}</p>
                <h3>{{ $article->price }}€</h3>
                <p>{{ $article->description }}</p>
                <p class="muted">Edad recomendada: {{ $article->min_age }} – {{ $article->max_age }} años</p>

                <div class="stack mt-md">
                    @auth
                        <form action="{{ route('cart.add', $article->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-primary"><span class="material-icons">add_shopping_cart</span>
                                Añadir</button>
                        </form>
                        <a href="{{ route('cart.index') }}" class="btn btn-ghost">Ver carrito</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión para comprar</a>
                    @endauth
                </div>

                <div class="mt-md"><a href="{{ route('articles.index') }}">Volver a la lista de artículos</a>
                </div>
            </div>
        </div>
    </div>
@endsection
