@extends('layouts.app')
@section('title', 'Nosotros')
@section('content')

<h2 class="section-title">Nuestro Equipo</h2>
<div class="row g-4 justify-content-center mb-5">
    <div class="col-md-5">
        <div class="card text-center p-4">
            <div class="fs-2 mb-2" style="color:var(--rojo)"><i class="bi bi-person-circle"></i></div>
            <img src="{{ asset('fotos/dani.png') }}"
                 class="card-img" style="height:200px;object-fit:cover;">
            <h5 class="fw-bold">Daniel Cabezas</h5>
            <p class="text-muted small mb-0">Mr Kasantari · Golden Shoes</p>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card text-center p-4">
            <div class="fs-2 mb-2" style="color:var(--rojo)"><i class="bi bi-person-circle"></i></div>
            <img src="{{ asset('fotos/helder.png') }}"
                 class="card-img" style="height:200px;object-fit:cover;">
            <h5 class="fw-bold">Helder Gomez</h5>
            <p class="text-muted small mb-0">Mr Largui · Golden Shoes</p>
        </div>
    </div>
</div>

<hr class="mb-5">
<h2 class="section-title">Formulario PQRS</h2>

<div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card p-4">

            @if(session('success'))
                <div class="alert alert-success">
                    <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('pqrs.guardar') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nombres</label>
                        <input type="text" name="nombre" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Apellidos</label>
                        <input type="text" name="apellido" class="form-control">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Correo electrónico</label>
                        <input type="email" name="correo" class="form-control">
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
                        <textarea name="mensaje" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-golden w-100">
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

@endsection
