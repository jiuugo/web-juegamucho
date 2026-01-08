@extends('layouts.main')
@section('page-title', 'Iniciar sesión')
@section('main-content')
    <div class="login-container">
        <h1>Inicia sesión</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required autofocus>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required>
            </div>

            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
@endsection
