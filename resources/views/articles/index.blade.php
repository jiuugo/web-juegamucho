@extends('layouts.main')
@section('page-title', 'Juega Mucho | Lista de Artículos')
@section('main-content')
    <div>
        <h1>Lista de Artículos</h1>
        <div>
            <h1>Filtros</h1>
            <div>
                <form action="{{ route('articles.index') }}" method="GET">
                    <div>
                        <label for="brand">Marca:</label>
                        <select name="brand" id="brand">
                            <option value="">Todas</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}" {{ request('brand') == $brand->id ? 'selected' : '' }}>
                                    {{ $brand->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="category">Categoría:</label>
                        <select name="category" id="category">
                            <option value="">Todas</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ request('category') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit">Aplicar Filtros</button>
                </form>
            </div>
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
