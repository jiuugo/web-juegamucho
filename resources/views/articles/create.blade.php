@extends('layouts.admin')
@section('page-title', 'Crear Artículo')
@section('main-content')
    <div>
        <h1>Crear Nuevo Artículo</h1>
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Nombre del Artículo</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="description">Descripción del Artículo</label>
                <textarea name="description" id="description" rows="4" required>{{ old('description') }}</textarea>
                @error('description')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <button type="submit">Crear Artículo</button>
        </form>
    </div>
@endsection
