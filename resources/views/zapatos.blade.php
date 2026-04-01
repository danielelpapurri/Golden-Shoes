@extends('layouts.app')
@section('title', 'Módulo Zapatos')
@section('content')

<h2 class="section-title"><i class="bi bi-plus-circle-fill"></i> Módulo de Zapatos</h2>
<p class="text-muted mb-4">Registra nuevos zapatos al inventario y consulta los registros existentes.</p>

@if(session('success'))
    <div class="alert alert-success mb-4">
        <i class="bi bi-check-circle-fill"></i> <strong>{{ session('success') }}</strong>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger mb-4">
        <strong><i class="bi bi-exclamation-triangle-fill"></i> Corrige los siguientes errores:</strong>
        <ul class="mb-0 mt-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- FORMULARIO --}}
<div class="card p-4 mb-5">
    <h5 class="fw-bold mb-4" style="color:var(--rojo)">
        <i class="bi bi-clipboard-plus"></i> Registrar Nuevo Zapato
    </h5>

    <form action="{{ route('zapatos.guardar') }}" method="POST">
        @csrf
        <div class="row g-3">

            <div class="col-md-6">
                <label class="form-label">Nombre del Zapato *</label>
                <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
            </div>
            <div class="col-md-6">
                <label class="form-label">Marca *</label>
                <select name="marca" class="form-select">
                    <option value="">-- Selecciona marca --</option>
                    @foreach(['Nike','Adidas','Puma','Reebok','Fila','Converse','Vans','New Balance','Otra'] as $m)
                        <option value="{{ $m }}" {{ old('marca')==$m ? 'selected':'' }}>{{ $m }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">Talla (EU) *</label>
                <select name="talla" class="form-select">
                    <option value="">-- Talla --</option>
                    @foreach(['35','36','37','38','39','40','41','42','43','44','45'] as $t)
                        <option value="{{ $t }}" {{ old('talla')==$t ? 'selected':'' }}>{{ $t }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">Color *</label>
                <select name="color" class="form-select">
                    <option value="">-- Color --</option>
                    @foreach(['Rojo','Negro','Blanco','Azul','Gris','Verde','Multicolor','Otro'] as $c)
                        <option value="{{ $c }}" {{ old('color')==$c ? 'selected':'' }}>{{ $c }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">Stock *</label>
                <input type="number" name="stock" class="form-control" min="0" value="{{ old('stock') }}">
            </div>

            <div class="col-md-6">
                <label class="form-label">Precio (COP) *</label>
                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="number" name="precio" class="form-control" step="0.01" min="0" value="{{ old('precio') }}">
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label">Descripción *</label>
                <input type="text" name="descripcion" class="form-control" value="{{ old('descripcion') }}">
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

{{-- TABLA --}}
<h5 class="fw-bold mb-3" style="color:var(--rojo)">
    <i class="bi bi-table"></i> Zapatos Registrados
    <span class="badge ms-2" style="background:var(--rojo)">{{ $zapatos->count() }}</span>
</h5>

@if($zapatos->isEmpty())
    <div class="alert alert-light text-center border">
        <i class="bi bi-inbox fs-3 text-muted d-block mb-2"></i>
        Aún no hay zapatos registrados.
    </div>
@else
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
                @foreach($zapatos as $z)
                <tr>
                    <td><strong>{{ $z->id }}</strong></td>
                    <td class="fw-semibold">{{ $z->nombre }}</td>
                    <td>{{ $z->marca }}</td>
                    <td>{{ $z->talla }}</td>
                    <td>
                        @if($z->color == 'Rojo')
                            <span class="badge badge-rojo">{{ $z->color }}</span>
                        @elseif($z->color == 'Negro')
                            <span class="badge badge-negro">{{ $z->color }}</span>
                        @elseif($z->color == 'Blanco')
                            <span class="badge badge-blanco">{{ $z->color }}</span>
                        @else
                            <span class="badge bg-secondary">{{ $z->color }}</span>
                        @endif
                    </td>
                    <td class="fw-bold" style="color:var(--rojo)">
                        ${{ number_format($z->precio, 0, ',', '.') }}
                    </td>
                    <td>
                        <span class="badge {{ $z->stock > 5 ? 'bg-success' : 'bg-warning text-dark' }}">
                            {{ $z->stock }}
                        </span>
                    </td>
                    <td class="small text-muted">{{ $z->descripcion }}</td>
                    <td class="small text-muted">{{ $z->created_at->format('d/m/Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif

@endsection
