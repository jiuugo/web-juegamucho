@extends('layouts.admin')
@section('page-title', 'Juega Mucho | Detalles del Artículo')
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
    </div>
    <a href="{{ route('dashboard.articles') }}">Volver a la lista de artículos</a>
@endsection
