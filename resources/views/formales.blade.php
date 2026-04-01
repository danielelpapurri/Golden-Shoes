@extends('layouts.app')
@section('title', 'Colección Tienda')
@section('content')

<h2 class="section-title">
    <i class="bi bi-briefcase" style="color:var(--rojo)"></i> Zapatos Formales / Elegantes
</h2>
<p class="text-muted mb-4">
Descubre nuestra colección premium de zapatos formales: elegancia, comodidad y estilo para oficina y eventos.
</p>

<div class="row g-4">

    {{-- Producto 1 --}}
    <div class="col-md-4">
        <div class="card card-gs">
            <img src="https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?w=500&q=80"
                 class="card-img-top" style="height:200px;object-fit:cover">
            <div class="card-body">
                <span class="badge badge-negro mb-2">Negro</span>
                <h5 class="fw-bold">Oxford Clásico Premium</h5>
                <p class="small text-muted">Cuero genuino elegante. Ideal para oficina y eventos formales.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <strong style="color:var(--negro);font-size:1.2rem">$280.000</strong>
                    <button class="btn btn-dark btn-sm">
                        <i class="bi bi-bag-plus"></i> Pedir
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Producto 2 --}}
    <div class="col-md-4">
        <div class="card card-gs">
            <img src="https://images.unsplash.com/photo-1614252235486-c4e7f7c8a8b2?w=500&q=80"
                 class="card-img-top" style="height:200px;object-fit:cover">
            <div class="card-body">
                <span class="badge badge-cafe mb-2">Café</span>
                <h5 class="fw-bold">Derby Ejecutivo</h5>
                <p class="small text-muted">Diseño sofisticado con acabado premium. Perfecto para oficina.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <strong style="color:#6b3e26;font-size:1.2rem">$260.000</strong>
                    <button class="btn btn-golden btn-sm">
                        <i class="bi bi-bag-plus"></i> Pedir
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Producto 3 --}}
    <div class="col-md-4">
        <div class="card card-gs">
            <img src="https://images.unsplash.com/photo-1618354691269-6e66c68c92d5?w=500&q=80"
                 class="card-img-top" style="height:200px;object-fit:cover">
            <div class="card-body">
                <span class="badge badge-cafe mb-2">Marrón</span>
                <h5 class="fw-bold">Loafer Elegante</h5>
                <p class="small text-muted">Estilo sin cordones cómodo y sofisticado.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <strong style="color:#6b3e26;font-size:1.2rem">$300.000</strong>
                    <button class="btn btn-golden btn-sm">
                        <i class="bi bi-bag-plus"></i> Pedir
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Producto 4 --}}
    <div class="col-md-4">
        <div class="card card-gs">
            <img src="https://images.unsplash.com/photo-1614252235402-22c34d6d87d0?w=500&q=80"
                 class="card-img-top" style="height:200px;object-fit:cover">
            <div class="card-body">
                <span class="badge badge-negro mb-2">Negro</span>
                <h5 class="fw-bold">Oxford Italiano</h5>
                <p class="small text-muted">Diseño europeo con acabado brillante.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <strong style="color:var(--negro);font-size:1.2rem">$310.000</strong>
                    <button class="btn btn-dark btn-sm">
                        <i class="bi bi-bag-plus"></i> Pedir
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Producto 5 --}}
    <div class="col-md-4">
        <div class="card card-gs">
            <img src="https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?w=500&q=80"
                 class="card-img-top" style="height:200px;object-fit:cover">
            <div class="card-body">
                <span class="badge badge-cafe mb-2">Café oscuro</span>
                <h5 class="fw-bold">Mocasín Ejecutivo</h5>
                <p class="small text-muted">Comodidad premium con estilo formal.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <strong style="color:#6b3e26;font-size:1.2rem">$270.000</strong>
                    <button class="btn btn-golden btn-sm">
                        <i class="bi bi-bag-plus"></i> Pedir
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Producto 6 --}}
    <div class="col-md-4">
        <div class="card card-gs" style="border:2px solid var(--rojo)">
            <div class="position-absolute top-0 end-0 m-2">
                <span class="badge" style="background:var(--rojo)">Premium</span>
            </div>
            <img src="https://images.unsplash.com/photo-1614252235486-c4e7f7c8a8b2?w=500&q=80"
                 class="card-img-top" style="height:200px;object-fit:cover">
            <div class="card-body">
                <span class="badge badge-negro mb-2">Negro</span>
                <h5 class="fw-bold">Elite Formal X</h5>
                <p class="small text-muted">Alta gama para ocasiones especiales.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <strong style="color:var(--rojo);font-size:1.2rem">$350.000</strong>
                    <button class="btn btn-golden btn-sm">
                        <i class="bi bi-bag-plus"></i> Pedir
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection