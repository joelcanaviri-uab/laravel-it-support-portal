@extends('layouts.base')

@section('contenido')
<div style="max-width: 400px; margin: 40px auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px;">
    <h2>Iniciar Sesión</h2>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/login" method="POST">
        @csrf
        <div style="margin-bottom: 15px;">
            <label for="email">Correo Electrónico:</label><br>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required style="width: 100%; padding: 8px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" name="password" required style="width: 100%; padding: 8px;">
        </div>

        <button type="submit" style="padding: 10px 20px; background-color: #0d6efd; color: white; border: none; border-radius: 4px; cursor: pointer;">
            Ingresar
        </button>
    </form>
</div>
@endsection