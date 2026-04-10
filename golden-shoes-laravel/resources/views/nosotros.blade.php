@extends('layouts.app')
@section('contenido')
<div class="container">

    <div class="text-center mb-5">
        <h1 class="fw-bold">Sobre Nosotros</h1>
        <p class="text-muted">
            En <strong>Gold Shoes</strong> trabajamos para ofrecer calzado moderno,
            cómodo y con estilo para cada ocasión.
        </p>
    </div>
    <hr>
    <div class="mt-5">

        <h2 class="text-center mb-4">Formulario PQRS</h2>

        <form class="row g-3">

            <div class="col-md-6">
                <label class="form-label">Nombre completo</label>
                <input type="text" class="form-control" placeholder="Ingrese su nombre">
            </div>

            <div class="col-md-6">
                <label class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" placeholder="correo@email.com">
            </div>

            <div class="col-md-6">
                <label class="form-label">Tipo de solicitud</label>
                <select class="form-select">
                    <option>Petición</option>
                    <option>Queja</option>
                    <option>Reclamo</option>
                    <option>Sugerencia</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Teléfono</label>
                <input type="text" class="form-control" placeholder="Número de contacto">
            </div>

            <div class="col-12">
                <label class="form-label">Mensaje</label>
                <textarea class="form-control" rows="4" placeholder="Escriba su mensaje"></textarea>
            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn btn-dark px-4">
                    Enviar solicitud
                </button>
            </div>

        </form>

    </div>

</div>

@endsection