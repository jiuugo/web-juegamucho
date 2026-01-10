@extends('layouts.main')
@section('page-title', 'Juega Mucho | Eliminar del Carrito')
@section('main-content')
    <div>
        <h1>Eliminar del Carrito</h1>
        <div>
            <p>¿Estás seguro de que deseas eliminar este artículo del carrito?</p>
            <form action="{{ route('cart.remove', $articleId) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Sí, eliminar</button>
                <a href="{{ route('cart.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
