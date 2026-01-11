@extends('layouts.main')
@section('page-title', 'Carrito de Compras')
@section('main-content')
    <div class="card">
        <h1>Carrito de Compras</h1>
        <p class="muted">{{ count($cartItems) }} artículo(s) en el carrito.</p>

        @if (count($cartItems) > 0)
            <div class="table-scroll">
                <table class="table table-full">
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
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>{{ $item['price'] ?? 'cambiar' }}€</td>
                                <td>{{ ($item['price'] ?? 0) * $item['quantity'] }}€</td>
                                <td>
                                    <form action="{{ route('cart.remove', $item['id']) }}" method="POST" class="inline-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-ghost">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="cart-actions">
                <div>
                    <h3>Total: {{ $total }}€</h3>
                </div>
                <div class="btn-group">
                    <form action="{{ route('cart.clear') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-ghost">Vaciar Carrito</button>
                    </form>
                    <form action="{{ route('order.store') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Realizar Pedido</button>
                    </form>
                </div>
            </div>
        @else
            <p>Tu carrito está vacío.</p>
        @endif
    </div>
@endsection
