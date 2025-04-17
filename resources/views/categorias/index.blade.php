@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">
        <h2 class="text-3xl font-bold text-center text-black-600 mb-6">📁 Categorias</h2>
        <a href="{{ route('categorias.create') }}" class="bg-blue-400 hover:bg-blue-500 text-white px-4 py-2 rounded-lg mb-4 inline-block">
            ➕ Agregar Categoria
        </a>

    
    <div class="overflow-x-auto bg-white rounded-lg ">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-6 py-3 text-left">ID</th>
                    <th class="px-6 py-3 text-left">🔠 Nombre</th>
                    <th class="px-6 py-3 text-left">📍 Estado</th>
                    <th class="px-6 py-3 text-left">⚙️ Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-100">
                @foreach ($categorias as $categoria)
                    <tr class="hover:bg-pink-50 transition-colors">
                        <td class="px-6 py-4">{{ $categoria->id }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $categoria->nombre }}</td>
                        <td class="px-6 py-4">
                            <span class="inline-block px-3 py-1 rounded-full text-white text-sm {{ $categoria->estado == 'activo' ? 'bg-green-500' : 'bg-gray-400' }}">
                                {{ ucfirst($categoria->estado) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-lg space-x-3">
                            <a href="{{ route('categorias.show', $categoria->id) }}" class="hover:scale-110 transition">👁️</a>
                            <a href="{{ route('categorias.edit', $categoria->id) }}" class="hover:scale-110 transition">✏️</a>
                            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar esta categoría?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="hover:scale-110 transition">🗑️</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
