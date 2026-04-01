<?php $__env->startSection('title', 'Nosotros'); ?>
<?php $__env->startSection('content'); ?>

<h2 class="section-title">Nuestro Equipo</h2>
<div class="row g-4 justify-content-center mb-5">
    <div class="col-md-5">
        <div class="card text-center p-4">
            <div class="fs-2 mb-2" style="color:var(--rojo)"><i class="bi bi-person-circle"></i></div>
            <h5 class="fw-bold">Brayan Camilo Salazar Diaz</h5>
            <p class="text-muted small mb-0">Desarrollador · Golden Shoes</p>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card text-center p-4">
            <div class="fs-2 mb-2" style="color:var(--rojo)"><i class="bi bi-person-circle"></i></div>
            <h5 class="fw-bold">Johan Sebastian Ramirez Torres</h5>
            <p class="text-muted small mb-0">Desarrollador · Golden Shoes</p>
        </div>
    </div>
</div>

<hr class="mb-5">

<h2 class="section-title">Formulario PQRS</h2>
<p class="text-muted mb-4">¿Tienes una petición, queja, reclamo o sugerencia? Cuéntanos.</p>

<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card p-4">

            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <i class="bi bi-check-circle-fill"></i> <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?php echo e(route('pqrs.guardar')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nombres</label>
                        <input type="text" name="nombre" class="form-control" value="<?php echo e(old('nombre')); ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Apellidos</label>
                        <input type="text" name="apellido" class="form-control" value="<?php echo e(old('apellido')); ?>">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Correo electrónico</label>
                        <input type="email" name="correo" class="form-control" value="<?php echo e(old('correo')); ?>">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Tipo de solicitud</label>
                        <select name="tipo" class="form-select">
                            <option value="">-- Selecciona --</option>
                            <option value="peticion">Petición</option>
                            <option value="queja">Queja</option>
                            <option value="reclamo">Reclamo</option>
                            <option value="sugerencia">Sugerencia</option>
                            <option value="felicitacion">Felicitación</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Mensaje</label>
                        <textarea name="mensaje" class="form-control" rows="4"><?php echo e(old('mensaje')); ?></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-golden w-100 py-2">
                            <i class="bi bi-send-fill"></i> Enviar mensaje
                        </button>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="terminos" id="terminos">
                            <label class="form-check-label" for="terminos">Acepto los términos y condiciones</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\segundoTaller\resources\views/nosotros.blade.php ENDPATH**/ ?>