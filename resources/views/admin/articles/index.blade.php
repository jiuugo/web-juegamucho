@extends('layouts.admin')
@section('page-title', 'Juega Mucho | Lista de Artículos')
@section('main-content')
    <div>
        <div class="row-between mb-md">
            <h1>Lista de Artículos</h1>
            <a href="{{ route('articles.create') }}" class="btn btn-primary">Crear Nuevo Artículo</a>

        </div>
        <table class="table-admin">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->name }}</td>
                        <td>{{ $article->brand->name }}</td>
                        <td>{{ $article->category->name }}</td>
                        <td>{{ $article->price }}€</td>
                        <td> <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-ghost"><span
                                    class="material-icons">
                                    edit
                                </span></a></td>

                        <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <td><button type="submit" class="btn btn-ghost"><span
                                        class="material-icons">delete</span></button></td>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
