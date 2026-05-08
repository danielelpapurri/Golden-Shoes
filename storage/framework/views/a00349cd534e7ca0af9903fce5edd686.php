
<?php $__env->startSection('title', 'Inicio'); ?>
<?php $__env->startSection('content'); ?>
<div class="row align-items-center g-4 mb-5 p-4 bg-white rounded-3 shadow-sm">
    <div class="col-md-7">
        <p class="text-uppercase fw-bold mb-1" style="color:var(--rojo);letter-spacing:2px;font-size:0.85rem;font-size:2.2rem">
            Nueva Colección 2027 
        </p>
        <h1 class="fw-black mb-3" style="font-size:3.2rem">
            Estilo, Comodidad, <span style="color:var(--rojo)">Actitud</span>
        </h1>
        <p class="text-muted mb-4">Zapatos que combinan diseño y comodidad para quienes marcan la diferencia.</p>
        <div class="d-flex gap-3">
            <a href="<?php echo e(route('deportivos')); ?>" class="btn btn-danger px-4" style="background-color:var(--rojo); border:none;">Ver Colección</a>
            <a href="<?php echo e(route('zapatos')); ?>" class="btn btn-outline-dark px-4">Agregar Zapato</a>
        </div>
    </div>

    <div class="col-md-5 text-center">
        <img src="<?php echo e(asset('fotos/muchaho_intro.png')); ?>" 
             class="img-fluid" 
             style="max-height: 350px; width: auto; object-fit: contain;" 
             alt="Muchacho Intro Gold Shoes">
    </div>
</div>
<h2 class="section-title">Nuestras Categorías</h2>
<div class="row g-4 mb-5">
    <div class="col-md-4">
        <div class="card text-white overflow-hidden">
            <img src="<?php echo e(asset('fotos/formales.png')); ?>"
                 class="card-img" style="height:200px;object-fit:cover;filter:brightness(0.55)" alt="Rojos">
            <div class="card-img-overlay d-flex flex-column justify-content-end"
                 style="background:linear-gradient(to top,rgba(201,36,36,0.85),transparent)">
                <h4 class="fw-black mb-1">Formales / Casual (Premium)</h4>
                <a href="<?php echo e(route('formales')); ?>" class="btn btn-golden btn-sm w-50">Ver más</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white overflow-hidden">
            <img src="<?php echo e(asset('fotos/deportivos.png')); ?>"
                 class="card-img" style="height:200px;object-fit:cover;filter:brightness(0.4)" alt="Negros">
            <div class="card-img-overlay d-flex flex-column justify-content-end"
                 style="background:linear-gradient(to top,rgba(23,23,23,0.9),transparent)">
                <h4 class="fw-black mb-1">Deportivos (Performance) </h4>
                <a href="<?php echo e(route('formales')); ?>" class="btn btn-secondary btn-sm w-50">Ver más</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card overflow-hidden">
            <img src="<?php echo e(asset('fotos/urbanos.png')); ?>"
                 class="card-img" style="height:200px;object-fit:cover;filter:brightness(0.7)" alt="Blancos">
            <div class="card-img-overlay d-flex flex-column justify-content-end"
                 style="background:linear-gradient(to top,rgba(200,200,200,0.85),transparent)">
                <h4 class="fw-black mb-1 text-dark">Urbanos (Lifestyle)</h4>
                <a href="<?php echo e(route('formales')); ?>" class="btn btn-outline-dark btn-sm w-50">Ver más</a>
            </div>
        </div>
    </div>
</div>
<h2 class="section-title">¿Por qué Golden Shoes?</h2>
<div class="row g-4 mb-5">
    <div class="col-md-4">
        <div class="card text-center p-4">
            <div class="fs-2 mb-2" style="color:var(--rojo)"><i class="bi bi-shield-check"></i></div>
            <h5 class="fw-bold">Calidad Garantizada</h5>
            <p class="text-muted small">Materiales premium seleccionados para durar más.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center p-4">
            <div class="fs-2 mb-2" style="color:var(--rojo)"><i class="bi bi-truck"></i></div>
            <h5 class="fw-bold">Envío a Todo el País</h5>
            <p class="text-muted small">Entrega rápida y segura a cualquier ciudad.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center p-4">
            <div class="fs-2 mb-2" style="color:var(--rojo)"><i class="bi bi-arrow-repeat"></i></div>
            <h5 class="fw-bold">Cambios Fáciles</h5>
            <p class="text-muted small">30 días para cambio si no quedas satisfecho.</p>
        </div>
    </div>
</div>
<div class="card p-4 text-center">
    <h5 class="fw-bold mb-1"><i class="bi bi-people-fill" style="color:var(--rojo)"></i> Equipo Golden Shoes</h5>
    <p class="mb-1"><strong>Daniel Cabezas</strong></p>
    <p class="mb-0"><strong>Helder Gomez</strong></p>
</div>

<?php $__env->stopSection(); ?>
<?php /**PATH C:\Users\Admin\Golden-Shoes\resources\views/inicio.blade.php ENDPATH**/ ?>