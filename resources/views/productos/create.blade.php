@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">💎 Crear nuevo producto</h2>

    @if ($errors->any())
        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            <strong>¡Ups!</strong> Hubo algunos problemas con tus entradas.<br><br>
            <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-lg shadow-md">
        @csrf

        <div>
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label for="material" class="block text-sm font-medium text-gray-700">Material:</label>
            <input type="text" name="material" id="material" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label for="color" class="block text-sm font-medium text-gray-700">Color:</label>
            <input type="text" name="color" id="color" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label for="talla" class="block text-sm font-medium text-gray-700">Talla:</label>
            <input type="text" name="talla" id="talla" class="mt-1 block w-full text-sm text-gray-500">
        </div>

        <div>
            <label for="precio" class="block text-sm font-medium text-gray-700">Precio:</label>
            <input type="number" name="precio" id="precio" step="0.01" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen:</label>
            <input type="file" name="imagen" id="imagen" class="mt-1 block w-full text-sm text-gray-500">
        </div>

        <div class="flex justify-between items-center">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Guardar ✔️
            </button>
        </div>
    </form>
</div>
@endsection
