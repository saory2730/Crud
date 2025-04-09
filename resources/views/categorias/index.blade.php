@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Listado de Categorías</h2>

    <a href="{{ route('categorias.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded mb-3 inline-block">
        Nueva Categoría
    </a>

    <div class="overflow-x-auto bg-white rounded-lg shadow-lg">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2 text-left">ID</th>
                    <th class="px-4 py-2 text-left">Nombre</th>
                    <th class="px-4 py-2 text-left">Descripción</th>
                    <th class="px-4 py-2 text-left">Estado</th>
                    <th class="px-4 py-2 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $categoria->id }}</td>
                        <td class="px-4 py-2">{{ $categoria->nombre }}</td>
                        <td class="px-4 py-2">{{ $categoria->descripcion }}</td>
                        <td class="px-4 py-2">
                            <span class="inline-block py-1 px-3 rounded-full text-white {{ $categoria->estado == 'activo' ? 'bg-green-500' : 'bg-gray-500' }}">
                                {{ ucfirst($categoria->estado) }}
                            </span>
                        </td>
                        <td class="px-4 py-2">
                            <a href="{{ route('categorias.show', $categoria->id) }}" class="text-blue-600 hover:underline">Ver</a>
                            <a href="{{ route('categorias.edit', $categoria->id) }}" class="text-yellow-600 hover:underline ml-2">Editar</a>
                            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Seguro que deseas eliminar esta categoría?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline ml-2">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
