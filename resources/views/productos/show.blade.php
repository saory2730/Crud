@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-lg w-full max-w-xl mx-auto">
    <h1 class="text-2xl font-bold mb-4 text-center text-gray-800">💎 Detalles del producto</h1>

    <div class="space-y-3 text-gray-700">
        <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
        <p><strong>Material:</strong> {{ $producto->material }}</p>
        <p><strong>Color:</strong> {{ $producto->color }}</p>
        <p><strong>Talla:</strong> {{ $producto->talla }}</p>
        <p><strong>Precio:</strong> S/. {{ number_format($producto->precio, 2, ',', '.') }}</p>
    </div>

</div>
@endsection
