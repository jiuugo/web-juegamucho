@extends('layouts.admin')
@section('page-title', 'Juega Mucho | Lista de Artículos')
@section('main-content')
    <div>
        <h1>Lista de Artículos</h1>
        <a href="{{ route('articles.create') }}">Crear Nuevo Artículo</a>
        <table>
            <thead>
                <tr>
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
                        <td>{{ $article->name }}</td>
                        <td>{{ $article->brand->name }}</td>
                        <td>{{ $article->category->name }}</td>
                        <td>{{ $article->price }}€</td>
                        <td><a href="{{ route('articles.edit', $article->id) }}">Editar</a></td>

                        <form action="{{ route('articles.destroy', $article->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <td><button type="submit">Eliminar</button></td>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
