<?php $__env->startSection('title', 'Módulo Zapatos'); ?>
<?php $__env->startSection('content'); ?>

<h2 class="section-title"><i class="bi bi-plus-circle-fill"></i> Módulo de Zapatos</h2>
<p class="text-muted mb-4">Registra nuevos zapatos al inventario y consulta los registros existentes.</p>

<?php if(session('success')): ?>
    <div class="alert alert-success mb-4">
        <i class="bi bi-check-circle-fill"></i> <strong><?php echo e(session('success')); ?></strong>
    </div>
<?php endif; ?>
<?php if($errors->any()): ?>
    <div class="alert alert-danger mb-4">
        <strong><i class="bi bi-exclamation-triangle-fill"></i> Corrige los siguientes errores:</strong>
        <ul class="mb-0 mt-2">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>


<div class="card p-4 mb-5">
    <h5 class="fw-bold mb-4" style="color:var(--rojo)">
        <i class="bi bi-clipboard-plus"></i> Registrar Nuevo Zapato
    </h5>

    <form action="<?php echo e(route('zapatos.guardar')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row g-3">

            <div class="col-md-6">
                <label class="form-label">Nombre del Zapato *</label>
                <input type="text" name="nombre" class="form-control" value="<?php echo e(old('nombre')); ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label">Marca *</label>
                <select name="marca" class="form-select">
                    <option value="">-- Selecciona marca --</option>
                    <?php $__currentLoopData = ['Nike','Adidas','Puma','Reebok','Fila','Converse','Vans','New Balance','Otra']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($m); ?>" <?php echo e(old('marca')==$m ? 'selected':''); ?>><?php echo e($m); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">Talla (EU) *</label>
                <select name="talla" class="form-select">
                    <option value="">-- Talla --</option>
                    <?php $__currentLoopData = ['35','36','37','38','39','40','41','42','43','44','45']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($t); ?>" <?php echo e(old('talla')==$t ? 'selected':''); ?>><?php echo e($t); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">Color *</label>
                <select name="color" class="form-select">
                    <option value="">-- Color --</option>
                    <?php $__currentLoopData = ['Rojo','Negro','Blanco','Azul','Gris','Verde','Multicolor','Otro']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($c); ?>" <?php echo e(old('color')==$c ? 'selected':''); ?>><?php echo e($c); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">Stock *</label>
                <input type="number" name="stock" class="form-control" min="0" value="<?php echo e(old('stock')); ?>">
            </div>

            <div class="col-md-6">
                <label class="form-label">Precio (COP) *</label>
                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="number" name="precio" class="form-control" step="0.01" min="0" value="<?php echo e(old('precio')); ?>">
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label">Descripción *</label>
                <input type="text" name="descripcion" class="form-control" value="<?php echo e(old('descripcion')); ?>">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-golden px-5">
                    <i class="bi bi-floppy-fill"></i> Guardar
                </button>
                <button type="reset" class="btn btn-outline-secondary px-4 ms-2">
                    <i class="bi bi-x-circle"></i> Limpiar
                </button>
            </div>
        </div>
    </form>
</div>


<h5 class="fw-bold mb-3" style="color:var(--rojo)">
    <i class="bi bi-table"></i> Zapatos Registrados
    <span class="badge ms-2" style="background:var(--rojo)"><?php echo e($zapatos->count()); ?></span>
</h5>

<?php if($zapatos->isEmpty()): ?>
    <div class="alert alert-light text-center border">
        <i class="bi bi-inbox fs-3 text-muted d-block mb-2"></i>
        Aún no hay zapatos registrados.
    </div>
<?php else: ?>
    <div class="table-responsive">
        <table class="table table-gs table-bordered table-hover align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Talla</th>
                    <th>Color</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $zapatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><strong><?php echo e($z->id); ?></strong></td>
                    <td class="fw-semibold"><?php echo e($z->nombre); ?></td>
                    <td><?php echo e($z->marca); ?></td>
                    <td><?php echo e($z->talla); ?></td>
                    <td>
                        <?php if($z->color == 'Rojo'): ?>
                            <span class="badge badge-rojo"><?php echo e($z->color); ?></span>
                        <?php elseif($z->color == 'Negro'): ?>
                            <span class="badge badge-negro"><?php echo e($z->color); ?></span>
                        <?php elseif($z->color == 'Blanco'): ?>
                            <span class="badge badge-blanco"><?php echo e($z->color); ?></span>
                        <?php else: ?>
                            <span class="badge bg-secondary"><?php echo e($z->color); ?></span>
                        <?php endif; ?>
                    </td>
                    <td class="fw-bold" style="color:var(--rojo)">
                        $<?php echo e(number_format($z->precio, 0, ',', '.')); ?>

                    </td>
                    <td>
                        <span class="badge <?php echo e($z->stock > 5 ? 'bg-success' : 'bg-warning text-dark'); ?>">
                            <?php echo e($z->stock); ?>

                        </span>
                    </td>
                    <td class="small text-muted"><?php echo e($z->descripcion); ?></td>
                    <td class="small text-muted"><?php echo e($z->created_at->format('d/m/Y')); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\segundoTaller\resources\views/zapatos.blade.php ENDPATH**/ ?>