@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-lg max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">💎 Editar producto</h1>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-gray-700">Nombre:</label>
            <input type="text" name="nombre" value="{{ $producto->nombre }}" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div>
            <label class="block text-gray-700">Material:</label>
            <input type="text" name="material" value="{{ $producto->material }}" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div>
            <label class="block text-gray-700">Color:</label>
            <input type="text" name="color" value="{{ $producto->color }}" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div>
            <label class="block text-gray-700">Talla:</label>
            <input type="text" name="talla" value="{{ $producto->talla }}"  class="w-full border px-3 py-2 rounded" required>
        </div>

        <div>
            <label class="block text-gray-700">Precio:</label>
            <input type="number" name="precio" value="{{ $producto->precio }}" step="0.01" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="flex justify-between items-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Actualizar producto ✔️</button>
        </div>
    </form>
</div>
@endsection
