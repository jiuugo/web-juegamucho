@extends('layouts.main')
@section('page-title', 'Juega Mucho | Lista de Artículos')
@section('main-content')
    <div class="">
        <header class="row-between">
            <h1>Lista de Artículos</h1>
            <div class="muted">Mostrando {{ $articles->count() }} artículos</div>
        </header>

        <div class="row-start">
            <aside class="card aside-card">
                <h3>Filtros</h3>
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
                    <div>
                        <label for="max_price">Precio Máximo (€):</label>
                        <input type="number" name="max_price" id="max_price" step="0.01"
                            value="{{ request('max_price') }}">
                    </div>
                    <div>
                        <label for="age">Edad del Niño:</label>
                        <input type="number" name="age" id="age" value="{{ request('age') }}">
                    </div>
                    <div class="btn-group mt-sm">
                        <button type="submit" class="btn btn-primary">Aplicar Filtros</button>
                        <a href="{{ route('articles.index') }}" class="btn btn-ghost">Limpiar</a>
                    </div>
                </form>
            </aside>

            <section class="flex-1">
                @if ($articles->count() > 0)
                    <div class="grid">
                        @foreach ($articles as $article)
                            <article class="card">
                                <a href="{{ route('articles.show', $article->id) }}" class="article-link">
                                    <img src="{{ $article->image ? asset('images/articulos/' . $article->image) : asset('images/no-image.png') }}"
                                        alt="{{ $article->name }}" class="article-image">
                                    <h3 class="article-title">{{ $article->name }}</h3>
                                </a>
                                <div class="card-actions">
                                    <div>
                                        <p class="muted">{{ $article->brand->name }} · {{ $article->category->name }}</p>
                                        <strong>{{ $article->price }}€</strong>
                                    </div>
                                    <div>
                                        @auth
                                            <form action="{{ route('cart.add', $article->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-primary"><span
                                                        class="material-icons">add_shopping_cart</span></button>
                                            </form>
                                        @else
                                            <a href="{{ route('login') }}" class="btn btn-primary"><span
                                                    class="material-icons">add_shopping_cart</span></a>
                                        @endauth
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @else
                    <p>No se encontraron artículos que coincidan con los filtros aplicados.</p>
                @endif
            </section>
        </div>
    </div>
@endsection
