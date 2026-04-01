<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?> | Golden Shoes</title>
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

        /* SECTION TITLE */
        .section-title {
            font-weight: 800;
            font-size: 1.6rem;
            border-left: 4px solid var(--rojo);
            padding-left: 0.7rem;
            margin-bottom: 1.2rem;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-golden">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('inicio')); ?>">
            GOLDEN <span>SHOES</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('inicio') ? 'active' : ''); ?>" href="<?php echo e(route('inicio')); ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('formales') ? 'active' : ''); ?>" href="<?php echo e(route('formales')); ?>">Premium</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('deportivos') ? 'active' : ''); ?>" href="<?php echo e(route('deportivos')); ?>">Deportivos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('accesorios') ? 'active' : ''); ?>" href="<?php echo e(route('accesorios')); ?>">Urbanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('contactos') ? 'active' : ''); ?>" href="<?php echo e(route('contactos')); ?>">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('zapatos') ? 'active' : ''); ?>" href="<?php echo e(route('zapatos')); ?>">
                        <i class="bi bi-plus-circle"></i> Zapatos
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container my-5">
    <?php echo $__env->yieldContent('content'); ?>
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
                    <li><a href="<?php echo e(route('inicio')); ?>">Inicio</a></li>
                    <li><a href="<?php echo e(route('formales')); ?>">Colección Formales / Casual (Premium)</a></li>
                    <li><a href="<?php echo e(route('deportivos')); ?>">Colección Deportivos (Performance)</a></li>
                    <li><a href="<?php echo e(route('accesorios')); ?>">Colección Urbanos (Lifestyle)</a></li>
                    <li><a href="<?php echo e(route('nosotros')); ?>">Nosotros</a></li>
                    <li><a href="<?php echo e(route('contactos')); ?>">Contacto</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h6 class="text-white fw-bold mb-2">Contacto</h6>
                <p class="small mb-1"><i class="bi bi-whatsapp"></i> +57 3178232220</p>
                <p class="small mb-1"><i class="bi bi-envelope"></i> adminzapatodanihel@goldenshoes.com</p>
                <p class="small"><i class="bi bi-instagram"></i> @GoldenShoesCol</p>
            </div>
        </div>
        <hr class="border-secondary mt-3">
        <p class="text-center small mb-0">© 2026 Golden Shoes - Pasto, Colombia</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH D:\segundoTaller\resources\views/layouts/app.blade.php ENDPATH**/ ?>