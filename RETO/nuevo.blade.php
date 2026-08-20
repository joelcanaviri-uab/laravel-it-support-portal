@extends('layouts.base')

@section('contenido')

    <h2>Nuevo producto</h2>

    <form action="/productos" method="POST">

        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}">

        @error('nombre')
            <p>{{ $message }}</p>
        @enderror

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" value="{{ old('precio') }}">

        @error('precio')
            <p>{{ $message }}</p>
        @enderror

        <label for="stock">Stock:</label>
<input type="number" id="stock" name="stock" value="{{ old('stock') }}">

@error('stock')
    <p>{{ $message }}</p>
@enderror

        <button type="submit">Guardar producto</button>

    </form>

@endsection