@extends('layouts.app')

@section('title', 'Colección Urbana - Lifestyle')

@section('content')
<div class="container">
    <div class="row align-items-center mb-5">
        <div class="col-md-8">
            <h2 class="section-title">
                <i class="bi bi-house-door" style="color:var(--rojo)"></i> Colección <span style="color:var(--rojo)">Urbanos</span>
            </h2>
            <p class="text-muted">
                Estilo versátil para la ciudad. Diseñados para quienes buscan comodidad sin perder la esencia moderna en su día a día.
            </p>
        </div>
        <div class="col-md-4 text-md-end">
            <span class="badge rounded-pill p-2 px-3" style="background-color: var(--negro);">
                Temporada 2026
            </span>
        </div>
    </div>

    <div class="row g-4">

        {{-- Producto 1: El que generamos --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="position-absolute top-0 start-0 m-2">
                    <span class="badge badge-rojo">Más Vendido</span>
                </div>
                <img src="{{ asset('fotos/muchaho_intro.png') }}" 
                     class="card-img-top p-3" style="height:250px;object-fit:contain;background:#f9f9f9">
                <div class="card-body">
                    <span class="text-uppercase text-muted small fw-bold">Streetwear</span>
                    <h5 class="fw-bold mt-1">Comfort Cloud Black</h5>
                    <p class="small text-muted">Zapatilla urbana negra con suela roja ergonómica. Comodidad garantizada.</p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <strong class="fs-5" style="color:var(--rojo)">$320.000</strong>
                        <a href="https://wa.me/573178232220?text=Hola!%20Me%20interesan%20los%20Comfort%20Cloud" 
                           target="_blank" class="btn btn-golden btn-sm">
                            <i class="bi bi-whatsapp"></i> Pedir
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Producto 2 --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=500&q=80" 
                     class="card-img-top" style="height:250px;object-fit:cover">
                <div class="card-body">
                    <span class="text-uppercase text-muted small fw-bold">Casual</span>
                    <h5 class="fw-bold mt-1">Vans Old Skool Custom</h5>
                    <p class="small text-muted">Un clásico que nunca muere, perfecto para cualquier outfit casual.</p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <strong class="fs-5" style="color:var(--negro)">$280.000</strong>
                        <button class="btn btn-dark btn-sm">
                            <i class="bi bi-bag-plus"></i> Pedir
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Producto 3 --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?w=500&q=80" 
                     class="card-img-top" style="height:250px;object-fit:cover">
                <div class="card-body">
                    <span class="text-uppercase text-muted small fw-bold">Lifestyle</span>
                    <h5 class="fw-bold mt-1">Retro Low White</h5>
                    <p class="small text-muted">Cuero sintético de alta calidad con detalles en gris humo.</p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <strong class="fs-5" style="color:var(--negro)">$350.000</strong>
                        <button class="btn btn-dark btn-sm">
                            <i class="bi bi-bag-plus"></i> Pedir
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Producto 4 --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://images.unsplash.com/photo-1605348532760-6753d2c43329?w=500&q=80" 
                     class="card-img-top" style="height:250px;object-fit:cover">
                <div class="card-body">
                    <span class="text-uppercase text-muted small fw-bold">Modern</span>
                    <h5 class="fw-bold mt-1">Air Max Lifestyle</h5>
                    <p class="small text-muted">Amortiguación de aire para caminar largas distancias en la ciudad.</p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <strong class="fs-5" style="color:var(--rojo)">$420.000</strong>
                        <button class="btn btn-golden btn-sm">
                            <i class="bi bi-bag-plus"></i> Pedir
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection