@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <h2 class="text-3xl font-bold text-center text-black-600 mb-6">💍 Lista de Productos</h2>

    <a href="{{ route('productos.create') }}" class="bg-blue-400 hover:bg-blue-500 text-white px-4 py-2 rounded-lg mb-4 inline-block">
        ➕ Nuevo Producto
    </a>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-4 rounded-md mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-6 py-3 text-left">ID</th>
                    <th class="px-6 py-3 text-left">🔠 Nombre</th>
                    <th class="px-6 py-3 text-left">🔩 Material</th>
                    <th class="px-6 py-3 text-left">🎨 Color</th>
                    <th class="px-6 py-3 text-left">📏 Talla</th>
                    <th class="px-6 py-3 text-left">💰 Precio</th>
                    <th class="px-6 py-3 text-left">🖼️ Imagen</th>
                    <th class="px-6 py-3 text-center">⚙️ Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-3">{{ $producto->id }}</td>
                        <td class="px-6 py-3">{{ $producto->nombre }}</td>
                        <td class="px-6 py-3">{{ $producto->material }}</td>
                        <td class="px-6 py-3">{{ $producto->color }}</td>
                        <td class="px-6 py-3">{{ $producto->talla ?? '-' }}</td>
                        <td class="px-6 py-3">${{ number_format($producto->precio, 0, ',', '.') }}</td>
                        <td class="px-6 py-3">
                            @if ($producto->imagen)
                                <img src="{{ asset('storage/' . $producto->imagen) }}" alt="Imagen del producto" class="w-16 h-16 object-cover rounded">
                            @else
                                <span class="text-gray-400 text-sm">Sin imagen</span>
                            @endif
                        </td>
                        <td class="px-6 py-3 text-center">
                            <a href="{{ route('productos.show', $producto) }}" class=" text-white px-3 py-1 rounded-lg ">
                                👁️
                            </a>
                            <a href="{{ route('productos.edit', $producto) }}" class=" text-white px-3 py-1 rounded-lg  mx-2">
                                ✏️
                            </a>
                            <form action="{{ route('productos.destroy', $producto) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Eliminar este producto?')">
                                @csrf
                                @method('DELETE')
                                <button class=" text-white px-3 py-1 rounded-lg">
                                    🗑️
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if ($productos->isEmpty())
                    <tr>
                        <td colspan="8" class="px-6 py-4 text-center text-gray-500">No hay productos registrados 😢</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
