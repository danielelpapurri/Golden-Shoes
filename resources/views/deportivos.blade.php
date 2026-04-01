@extends('layouts.app')
@section('title', 'Colección Tienda')
@section('content')

<h2 class="section-title">
    <i class="bi bi-lightning-charge" style="color:var(--rojo)"></i> Deportivos (Performance)
</h2>
<p class="text-muted mb-4">
Rendimiento, velocidad y comodidad. Descubre los mejores tenis deportivos para entrenamiento, running y alto desempeño.
</p>

<div class="row g-4">

    {{-- Producto 1 --}}
    <div class="col-md-4">
        <div class="card card-gs">
            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500&q=80"
                 class="card-img-top" style="height:200px;object-fit:cover">
            <div class="card-body">
                <span class="badge badge-rojo mb-2">Running</span>
                <h5 class="fw-bold">Air Zoom X Pro</h5>
                <p class="small text-muted">Alto rendimiento con máxima amortiguación y ligereza.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <strong style="color:var(--rojo);font-size:1.2rem">$450.000</strong>
                    <button class="btn btn-golden btn-sm">
                        <i class="bi bi-bag-plus"></i> Pedir
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Producto 2 --}}
    <div class="col-md-4">
        <div class="card card-gs">
            <img src="https://images.unsplash.com/photo-1600185365926-3a2ce3cdb9eb?w=500&q=80"
                 class="card-img-top" style="height:200px;object-fit:cover">
            <div class="card-body">
                <span class="badge badge-rojo mb-2">Training</span>
                <h5 class="fw-bold">Ultraboost 23</h5>
                <p class="small text-muted">Comodidad total y energía en cada paso.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <strong style="color:var(--rojo);font-size:1.2rem">$500.000</strong>
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
            <img src="https://images.unsplash.com/photo-1556906781-9a412961a28d?w=500&q=80"
                 class="card-img-top" style="height:200px;object-fit:cover">
            <div class="card-body">
                <span class="badge badge-rojo mb-2">Running</span>
                <h5 class="fw-bold">Gel Nimbus Pro</h5>
                <p class="small text-muted">Amortiguación avanzada para largas distancias.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <strong style="color:var(--rojo);font-size:1.2rem">$420.000</strong>
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
            <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?w=500&q=80"
                 class="card-img-top" style="height:200px;object-fit:cover">
            <div class="card-body">
                <span class="badge badge-negro mb-2">Gym</span>
                <h5 class="fw-bold">RS-X Performance</h5>
                <p class="small text-muted">Diseño resistente para entrenamiento intenso.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <strong style="color:var(--negro);font-size:1.2rem">$390.000</strong>
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
            <img src="https://images.unsplash.com/photo-1600269452121-4f2416e55c28?w=500&q=80"
                 class="card-img-top" style="height:200px;object-fit:cover">
            <div class="card-body">
                <span class="badge badge-blanco mb-2">Running</span>
                <h5 class="fw-bold">Wave Rider X</h5>
                <p class="small text-muted">Estabilidad y confort para correr sin límites.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <strong style="color:var(--carbon);font-size:1.2rem">$410.000</strong>
                    <button class="btn btn-secondary btn-sm">
                        <i class="bi bi-bag-plus"></i> Pedir
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Producto 6 NUEVO --}}
    <div class="col-md-4">
        <div class="card card-gs" style="border:2px solid var(--rojo)">
            <div class="position-absolute top-0 end-0 m-2">
                <span class="badge" style="background:var(--rojo)">¡TOP!</span>
            </div>
            <img src="https://images.unsplash.com/photo-1539185441755-769473a23570?w=500&q=80"
                 class="card-img-top" style="height:200px;object-fit:cover">
            <div class="card-body">
                <span class="badge badge-rojo mb-2">Performance</span>
                <h5 class="fw-bold">Velocity Nitro X</h5>
                <p class="small text-muted">Tecnología avanzada para máximo desempeño.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <strong style="color:var(--rojo);font-size:1.2rem">$480.000</strong>
                    <button class="btn btn-golden btn-sm">
                        <i class="bi bi-bag-plus"></i> Pedir
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection