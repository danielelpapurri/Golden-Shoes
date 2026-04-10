<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gold Shoes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

<header class="main-header">

    <div class="logo-container">
        <img src="{{ asset('fotos/logo_1.png') }}" width="194">
    </div>

    <nav class="menu">
        <a href="{{ route('inicio') }}">Inicio</a>
        <a href="{{ route('menu') }}">Tienda</a>
        <a href="{{ route('nosotros') }}">Nosotros</a>
        <a href="#">Sucursales</a>
        <a href="{{ route('contacto') }}">Contacto</a>
    </nav>

</header>

@yield('contenido')

<footer class="footer">
    <p>&copy; 2026 Gold Shoes <br> Ing. Daniel Cabezas</p>
</footer>

</body>
</html>