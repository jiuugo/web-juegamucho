@extends('layouts.main')
@section('page-title', 'Juega Mucho | ' . $article->name)
@section('main-content')
    <div>
        <h1>{{ $article->name }}</h1>
        <div>
            <p>{{ $article->description }}</p>
            <p>Marca: {{ $article->brand->name }}</p>
            <p>Categoría: {{ $article->category->name }}</p>
            <p>Precio: {{ $article->price }}€</p>
            <p>Edad recomendada de {{ $article->min_age }} a {{ $article->max_age }} años.</p>
            <a href="{{ route('articles.index') }}">Volver a la lista de artículos</a>
        </div>
    </div>
@endsection
