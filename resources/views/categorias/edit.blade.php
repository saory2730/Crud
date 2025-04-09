@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-lg w-full max-w-xl mx-auto">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">✏️ Editar Categoría</h1>

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

    <form action="{{ route('categorias.update', $categoria) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $categoria->nombre) }}" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label for="estado" class="block text-sm font-medium text-gray-700">Estado:</label>
            <select name="estado" id="estado" required 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option value="1" {{ $categoria->estado == 1 ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ $categoria->estado == 0 ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>

        <div class="flex justify-between">
            <a href="{{ route('categorias.index') }}" class="text-blue-500 hover:underline">← Volver</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Actualizar ✔️
            </button>
        </div>
    </form>
</div>
@endsection
