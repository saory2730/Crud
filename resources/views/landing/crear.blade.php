@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-xl shadow-md mt-10">
    <h2 class="text-2xl font-bold mb-6">Crear Producto</h2>

    @if ($errors->any())
        <div class="mb-4 bg-red-100 text-red-700 p-4 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label for="nombre" class="block font-medium">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label for="material" class="block font-medium">Material:</label>
            <input type="text" name="material" id="material" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label for="color" class="block font-medium">Color:</label>
            <input type="text" name="color" id="color" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label for="precio" class="block font-medium">Precio:</label>
            <input type="number" step="0.01" name="precio" id="precio" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label for="imagen" class="block font-medium">Imagen:</label>
            <input type="file" name="imagen" id="imagen" class="w-full border rounded p-2">
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
            Guardar Producto
        </button>
    </form>
</div>
@endsection

