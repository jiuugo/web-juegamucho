@extends('layouts.main')
@section('page-title', 'Detalle del Pedido #' . $order->id)
@section('main-content')
    <div>
        <h1>Detalle del Pedido #{{ $order->id }}</h1>
        <div>
            <p><strong>ID del Usuario:</strong> {{ $order->user_id }}</p>
            <p><strong>Fecha del Pedido:</strong> {{ $order->created_at }}</p>
            <p><strong>Total (€):</strong> {{ $order->total_price }}€</p>
        </div>
        <div>
            <h2>Artículos del Pedido</h2>
            @if (count($order->items) > 0)
                <table>
                    <thead>
                        <tr>
                            <th>Artículo</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario (€)</th>
                            <th>Subtotal (€)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->items as $item)
                            <tr>
                                <td>{{ $item->article->name }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->price }}€</td>
                                <td>{{ $item->price * $item->quantity }}€</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No hay artículos en este pedido.</p>
            @endif
        </div>
        @role('admin')
            <p><a href="{{ route('orders.index') }}">Volver a la lista de pedidos</a></p>
        @else
            <p><a href="{{ route('articles') }}">Volver a artículos</a></p>
        @endrole
    </div>
@endsection
