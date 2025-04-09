@extends('layouts.app')

@section('content')
<div class="container text-center mt-5">
    <h1 style="color: fuchsia;">💎 Jessica Joyería 💎</h1>
    <div class="row justify-content-center mt-4">
        <div class="col-md-4">
            <a href="{{ route('categorias.index') }}" class="btn btn-outline-primary w-100 fs-4">
                📂 Categorías
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('productos.index') }}" class="btn btn-outline-success w-100 fs-4">
                💍 Productos
            </a>
        </div>
    </div>
</div>
@endsection
