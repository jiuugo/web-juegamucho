@extends('layouts.admin')
@section('page-title', 'Inicio')
@section('main-content')
    <h1>Hola mundo</h1>
    @role('admin')
        <p>Contenido solo para administradores.</p>
    @else
        <p>Contenido para usuarios normales.</p>
    @endrole
@endsection
