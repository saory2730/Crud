@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-xl shadow-lg w-full max-w-xl mx-auto">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">👁️ Detalles de la Categoría</h1>

    <div class="space-y-4 text-gray-700">
        <p><strong>Nombre:</strong> {{ $categoria->nombre }}</p>
        <p><strong>Estado:</strong>
            @if($categoria->estado == 1)
                <span class="text-green-600 font-semibold">Activo</span>
            @else
                <span class="text-red-600 font-semibold">Inactivo</span>
            @endif
        </p>
    </div>

    <div class="mt-6 flex justify-end space-x-4">
        <a href="{{ route('categorias.edit', $categoria) }}" class="bg-yellow-500 text-white px-6 py-3 rounded-lg hover:bg-yellow-600 transition-all duration-200">
            ✏️ Editar
        </a>
        <a href="{{ route('categorias.index') }}" class="bg-gray-300 text-gray-800 px-6 py-3 rounded-lg hover:bg-gray-400 transition-all duration-200">
            Volver 🔙
        </a>
    </div>
</div>
@endsection
