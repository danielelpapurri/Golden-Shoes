@extends('layouts.app')
@section('title', 'Inicio')
@section('content')

{{-- HERO --}}
<div class="row align-items-center g-4 mb-5 p-4 bg-white rounded-3">
    <div class="col-md-8">
        <p class="text-uppercase fw-bold mb-1" style="color:var(--rojo);letter-spacing:2px;font-size:0.85rem;">
            Nueva Colección 2026
        </p>
        <h1 class="fw-black mb-3" style="font-size:2.2rem">
            Estilo, Comodidad, <span style="color:var(--rojo)">Actitud</span>
        </h1>
        <p class="text-muted mb-4">Zapatos que combinan diseño y comodidad para quienes marcan la diferencia.</p>
        <div class="d-flex gap-3">
            <a href="{{ route('menu') }}" class="btn btn-golden px-4">Ver Colección</a>
            <a href="{{ route('zapatos') }}" class="btn btn-outline-dark px-4">Agregar Zapato</a>
        </div>
    </div>
</div>

{{-- CATEGORÍAS --}}
<h2 class="section-title">Nuestras Categorías</h2>
<div class="row g-4 mb-5">
    <div class="col-md-4">
        <div class="card text-white overflow-hidden">
            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500&q=80"
                 class="card-img" style="height:200px;object-fit:cover;filter:brightness(0.55)" alt="Rojos">
            <div class="card-img-overlay d-flex flex-column justify-content-end"
                 style="background:linear-gradient(to top,rgba(201,36,36,0.85),transparent)">
                <h4 class="fw-black mb-1">ROJOS</h4>
                <a href="{{ route('menu') }}" class="btn btn-golden btn-sm w-50">Ver más</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white overflow-hidden">
            <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?w=500&q=80"
                 class="card-img" style="height:200px;object-fit:cover;filter:brightness(0.4)" alt="Negros">
            <div class="card-img-overlay d-flex flex-column justify-content-end"
                 style="background:linear-gradient(to top,rgba(23,23,23,0.9),transparent)">
                <h4 class="fw-black mb-1">NEGROS</h4>
                <a href="{{ route('menu') }}" class="btn btn-secondary btn-sm w-50">Ver más</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card overflow-hidden">
            <img src="https://images.unsplash.com/photo-1600269452121-4f2416e55c28?w=500&q=80"
                 class="card-img" style="height:200px;object-fit:cover;filter:brightness(0.7)" alt="Blancos">
            <div class="card-img-overlay d-flex flex-column justify-content-end"
                 style="background:linear-gradient(to top,rgba(200,200,200,0.85),transparent)">
                <h4 class="fw-black mb-1 text-dark">BLANCOS</h4>
                <a href="{{ route('menu') }}" class="btn btn-outline-dark btn-sm w-50">Ver más</a>
            </div>
        </div>
    </div>
</div>

{{-- POR QUÉ ELEGIRNOS --}}
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

{{-- EQUIPO --}}
<div class="card p-4 text-center">
    <h5 class="fw-bold mb-1"><i class="bi bi-people-fill" style="color:var(--rojo)"></i> Equipo Golden Shoes</h5>
    <p class="mb-1"><strong>Brayan Camilo Salazar Diaz</strong></p>
    <p class="mb-0"><strong>Johan Sebastian Ramirez Torres</strong></p>
    <small class="text-muted">Segundo Taller · Programación Avanzada · CESMAG 2026</small>
</div>

@endsection
