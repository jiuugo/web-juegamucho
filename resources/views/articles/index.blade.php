@extends('layouts.main')
@section('page-title', 'Lista de Artículos')
@section('main-content')
    <div>
        <h1>Lista de Artículos</h1>
        <div>
            @foreach ($articles as $article)
                <div>
                    <h2>{{ $article->name }}</h2>
                    <p>{{ $article->brand->name }}</p>
                    <p>{{ $article->category->name }}</p>
                    <p>{{ $article->price }}€</p>
                    <a href="{{ route('articles.show', $article->id) }}">Leer más</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
