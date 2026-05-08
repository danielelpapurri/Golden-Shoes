@extends('layouts.app')
@section('title', 'Contacto')
@section('content')

<h2 class="section-title">Contáctanos</h2>
<div class="row g-4 justify-content-center mb-5">
    <div class="col-md-4">
        <div class="card card-gs text-center p-4">
            <div class="fs-1 mb-2" style="color:#25D366"><i class="bi bi-whatsapp"></i></div>
            <h5 class="fw-bold">WhatsApp</h5>
            <p class="text-muted small">Respondemos en minutos</p>
            <strong>+57 3178232220</strong>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-gs text-center p-4">
            <div class="fs-1 mb-2" style="color:var(--rojo)"><i class="bi bi-envelope-fill"></i></div>
            <h5 class="fw-bold">Correo</h5>
            <p class="text-muted small">Te respondemos el mismo día</p>
            <strong>adminzapatodanihel@goldenshoes.com</strong>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-gs text-center p-4">
            <div class="fs-1 mb-2" style="color:#E1306C"><i class="bi bi-instagram"></i></div>
            <h5 class="fw-bold">Instagram</h5>
            <p class="text-muted small">Síguenos y ve lo nuevo</p>
            <strong>@GoldenShoesCol</strong>
        </div>
    </div>
</div>

<div class="card card-gs p-4 text-center mb-4" style="background:#ffffff;border-left:5px solid var(--rojo)">
    <h5 class="fw-bold mb-3"><i class="bi bi-clock-fill" style="color:var(--rojo)"></i> Horario de Atención</h5>
    <div class="row justify-content-center g-3">
        <div class="col-md-4">
            <p class="mb-1 fw-bold">Lunes a Viernes</p>
            <p class="text-muted">9:00 am – 6:00 pm</p>
        </div>
        <div class="col-md-4">
            <p class="mb-1 fw-bold">Sábados</p>
            <p class="text-muted">10:00 am – 3:00 pm</p>
        </div>
        <div class="col-md-4">
            <p class="mb-1 fw-bold">Domingos</p>
            <p class="text-muted">Cerrado</p>
        </div>
    </div>
</div>
<div class="rounded-4 overflow-hidden shadow" style="height:220px;background:linear-gradient(135deg,#ffffff,#f6f6f6);display:flex;align-items:center;justify-content:center;">
    <div class="text-center text-muted">
        <i class="bi bi-geo-alt-fill fs-1" style="color:var(--rojo)"></i>
        <p class="mt-2 fw-bold">Pasto, Nariño, Colombia</p>
        <small>Calle Ejemplo #10-20</small>
    </div>
</div>

@endsection
