@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <h2 class="text-3xl font-bold text-center text-blue-600 mb-6">💍 Lista de Productos</h2>

    <a href="{{ route('productos.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-lg mb-4 inline-block hover:bg-green-600">
        ➕ Nuevo Producto
    </a>

    @if(session('success'))
        <div class="alert alert-success bg-green-100 text-green-700 p-4 rounded-md mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-6 py-3 text-left">ID</th>
                    <th class="px-6 py-3 text-left">📦 Nombre</th>
                    <th class="px-6 py-3 text-left">🔩 Material</th>
                    <th class="px-6 py-3 text-left">🎨 Color</th>
                    <th class="px-6 py-3 text-left">💰 Precio</th>
                    <th class="px-6 py-3 text-center">🔧 Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr class="border-b">
                        <td class="px-6 py-3">{{ $producto->id }}</td>
                        <td class="px-6 py-3">{{ $producto->nombre }}</td>
                        <td class="px-6 py-3">{{ $producto->material }}</td>
                        <td class="px-6 py-3">{{ $producto->color }}</td>
                        <td class="px-6 py-3">S/. {{ number_format($producto->precio, 2) }}</td>
                        <td class="px-6 py-3 text-center">
                            <a href="{{ route('productos.show', $producto) }}" class="bg-blue-500 text-white px-3 py-1 rounded-lg inline-block hover:bg-blue-600">
                                👁️ Ver
                            </a>
                            <a href="{{ route('productos.edit', $producto) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-lg inline-block hover:bg-yellow-600 mx-2">
                                ✏️ Editar
                            </a>
                            <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-500 text-white px-3 py-1 rounded-lg inline-block hover:bg-red-600">
                                    🗑️ Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
