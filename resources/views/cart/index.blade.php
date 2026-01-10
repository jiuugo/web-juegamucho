@extends('layouts.main')
@section('page-title', 'Carrito de Compras')
@section('main-content')
    <div>
        <h1>Carrito de Compras</h1>
        <div>
            {{ count($cartItems) }} artículo(s) en el carrito.
            @if (count($cartItems) > 0)
                <table>
                    <thead>
                        <tr>
                            <th>Artículo</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario (€)</th>
                            <th>Subtotal (€)</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $item)
                            <tr>
                                <td>{{ $item->article->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->article->price }}€</td>
                                <td>{{ $item->article->price * $item->quantity }}€</td>
                                <td>
                                    <form action="{{ route('cart.remove', $item->article->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    <h2>Total: {{ $total }}€</h2>
                </div>
                <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Vaciar Carrito</button>
                </form>
                <form action="{{ route('order.add') }}" method="POST">
                    @csrf
                    <button type="submit">Realizar Pedido</button>
                </form>
            @else
                <p>Tu carrito está vacío.</p>
            @endif
        </div>
    </div>
@endsection
