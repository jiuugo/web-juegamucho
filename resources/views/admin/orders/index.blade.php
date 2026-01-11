@extends('layouts.admin')
@section('page-title', 'Juega Mucho | Detalles del Artículo')
@section('main-content')
    <h1>Lista de Pedidos</h1>
    <div>
        <table class="table-admin">
            <thead>
                <tr>
                    <th>ID Pedido</th>
                    <th>Usuario</th>
                    <th>Total</th>
                    <th>Fecha de Creación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->total }}€</td>
                        <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                        <td><a href="{{ route('orders.show', $order->id) }}">Ver Detalles</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
