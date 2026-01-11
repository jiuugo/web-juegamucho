@extends('layouts.main')
@section('page-title', 'Juega Mucho | ' . $article->name)
@section('main-content')
    <div>
        <img src="{{ asset('images/articulos/' . $article->image) }}" alt="{{ $article->name }}" width="300">
        <h1>{{ $article->name }}</h1>
        <div>
            <p>{{ $article->description }}</p>
            <p>Marca: {{ $article->brand->name }}</p>
            <p>Categoría: {{ $article->category->name }}</p>
            <p>Precio: {{ $article->price }}€</p>
            <p>Edad recomendada de {{ $article->min_age }} a {{ $article->max_age }} años.</p>
        </div>
        @auth
            <div>
                <p>{{ isset($cart[$article->id]) ? $cart[$article->id]['quantity'] : 0 }} unidades en
                    el
                    carrito</p>
            </div>
            <form action="{{ route('cart.add', $article->id) }}" method="post">
                @csrf
                <button type="submit"><span class="material-icons">
                        add_shopping_cart
                    </span></button>
            </form>
            <button><a href="{{ route('cart.index') }}"><span class="material-icons">shopping_cart</span></a></button>
        @else
            <button><a href="{{ route('login') }}"><span class="material-icons">
                        add_shopping_cart
                    </span></a></button>
        @endauth
        <a href="{{ route('articles.index') }}">Volver a la lista de artículos</a>
    </div>
@endsection
