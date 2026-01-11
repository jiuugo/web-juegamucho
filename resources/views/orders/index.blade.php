@extends('layouts.admin')
@section('page-title', 'Gestión de Pedidos')
@section('main-content')
    <div>
        <h1>Lista de Pedidos</h1>
        <div>
            {{ count($orders) }} pedido(s) realizados.
            @if (count($orders) > 0)
                <table class="table-admin">
                    <thead>
                        <tr>
                            <th>ID del Pedido</th>
                            <th>Nombre del Usuario</th>
                            <th>Fecha del Pedido</th>
                            <th>Total (€)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->user->name }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->total_price }}€</td>
                                <td><a href="{{ route('orders.show', $order->id) }}" class="btn btn-ghost">Ver Detalle</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No se han realizado pedidos aún.</p>
            @endif
        </div>
    </div>
@endsection
