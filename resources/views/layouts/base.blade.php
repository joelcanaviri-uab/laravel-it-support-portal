<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>IT Support & Infrastructure Portal</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header>
        <h1>IT Support & Infrastructure Portal</h1>
        <p>Plataforma de soporte e infraestructura TI</p>
    </header>

    <nav>
        <a href="/productos">Productos</a>
        <a href="/productos/nuevo">Nuevo producto</a>
    </nav>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>IT Support & Infrastructure Portal</p>
    </footer>

</body>
</html>