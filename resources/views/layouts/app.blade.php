<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Golden Shoes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --rojo:   #C92424;
            --negro:  #171717;
            --gris:   #F6F6F6;
            --carbon: #404440;
        }

        body {
            background-color: var(--gris);
            color: var(--negro);
            font-family: 'Segoe UI', sans-serif;
        }

        /* NAVBAR */
        .navbar-golden {
            background-color: #fff;
            border-bottom: 3px solid var(--rojo);
        }
        .navbar-golden .navbar-brand {
            font-size: 1.4rem;
            font-weight: 900;
            color: var(--negro) !important;
        }
        .navbar-golden .navbar-brand span { color: var(--rojo); }
        .navbar-golden .nav-link {
            color: var(--negro) !important;
            font-weight: 600;
        }
        .navbar-golden .nav-link:hover,
        .navbar-golden .nav-link.active { color: var(--rojo) !important; }

        .btn-golden {
            background-color: var(--rojo);
            color: #fff !important;
            font-weight: 700;
            border: none;
            border-radius: 6px;
            padding: 0.4rem 1.2rem;
        }
        .btn-golden:hover { background-color: #a81d1d; }

        /* FOOTER */
        footer {
            background-color: var(--negro);
            color: #ccc;
            padding: 2rem 0 1rem;
            margin-top: 3rem;
        }
        footer .brand-footer { color: #fff; font-weight: 900; font-size: 1.2rem; }
        footer .brand-footer span { color: var(--rojo); }
        footer a { color: #aaa; text-decoration: none; }
        footer a:hover { color: var(--rojo); }

        /* CARDS */
        .card { border: 1px solid #e0e0e0; border-radius: 8px; }

        /* SECTION TITLE */
        .section-title {
            font-weight: 800;
            font-size: 1.6rem;
            border-left: 4px solid var(--rojo);
            padding-left: 0.7rem;
            margin-bottom: 1.2rem;
        }

        /* FORM */
        .form-control:focus, .form-select:focus {
            border-color: var(--rojo);
            box-shadow: 0 0 0 0.15rem rgba(201,36,36,0.2);
        }
        .form-label { font-weight: 600; color: var(--carbon); }

        /* TABLE */
        .table-gs thead { background-color: var(--rojo); color: #fff; }
        .table-gs tbody tr:hover { background-color: #fde8e8; }

        /* BADGES */
        .badge-rojo   { background-color: var(--rojo); color: #fff; }
        .badge-negro  { background-color: var(--negro); color: #fff; }
        .badge-blanco { background-color: #e0e0e0; color: var(--negro); }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-golden">
    <div class="container">
        <a class="navbar-brand" href="{{ route('inicio') }}">
            GOLDEN <span>SHOES</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('inicio') ? 'active' : '' }}" href="{{ route('inicio') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('formales') ? 'active' : '' }}" href="{{ route('formales') }}">Premium</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('deportivos') ? 'active' : '' }}" href="{{ route('deportivos') }}">Deportivos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contactos') ? 'active' : '' }}" href="{{ route('contactos') }}">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('zapatos') ? 'active' : '' }}" href="{{ route('zapatos') }}">
                        <i class="bi bi-plus-circle"></i> Zapatos
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container my-5">
    @yield('content')
</div>

<footer>
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="brand-footer mb-2">GOLDEN <span>SHOES</span></div>
                <p class="small">Estilo, Comodidad, Actitud.<br>Tu tienda de zapatos de confianza.</p>
            </div>
            <div class="col-md-4">
                <h6 class="text-white fw-bold mb-2">Navegación</h6>
                <ul class="list-unstyled small">
                    <li><a href="{{ route('inicio') }}">Inicio</a></li>
                    <li><a href="{{ route('menu') }}">Colección Formales / Casual (Premium)</a></li>
                    <li><a href="{{ route('menu') }}">Colección Deportivos (Performance)</a></li>
                    <li><a href="{{ route('menu') }}">Colección Urbanos (Lifestyle)</a></li>
                    <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                    <li><a href="{{ route('contactos') }}">Contacto</a></li>
                    <li><a href="{{ route('zapatos') }}">Módulo Zapatos</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h6 class="text-white fw-bold mb-2">Contacto</h6>
                <p class="small mb-1"><i class="bi bi-whatsapp"></i> +57 3178232220</p>
                <p class="small mb-1"><i class="bi bi-envelope"></i>adminzapatodanihel@goldenshoes.com</p>
                <p class="small"><i class="bi bi-instagram"></i> @GoldenShoesCol</p>
            </div>
        </div>
        <hr class="border-secondary mt-3">
        <p class="text-center small mb-0">© 2026 Golden Shoes</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
