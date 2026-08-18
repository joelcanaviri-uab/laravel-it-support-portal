@extends('layouts.base')

@section('contenido')

    <h2>Productos</h2>

    @if($productos->count() > 0)

        @foreach($productos as $producto)

            <div>
                <h3>{{ $producto->nombre }}</h3>
                <p>Precio: Bs {{ $producto->precio }}</p>
            </div>

        @endforeach

    @else

        <p>No hay productos registrados.</p>

    @endif

@endsection