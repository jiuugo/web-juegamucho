@extends('layouts.main')
@section('page-title', 'Crear cuenta')
@section('main-content')
    <div class="login-container">
        <h1>Crear Cuenta</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>

            <button type="submit">Registrarse</button>

            <div style="margin-top: 15px; text-align: center; font-size: 0.9rem;">
                <a href="{{ route('login') }}" style="color: #333;">¿Ya tienes cuenta? Inicia sesión</a>
            </div>
        </form>
    </div>
@endsection
