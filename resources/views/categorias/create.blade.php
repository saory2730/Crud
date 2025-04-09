<x-app-layout>
    <div class="container">
        <div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">📋 Crear Categoria</h2>

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

            <form action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-lg shadow-md">
                @csrf

                <div class="mb-3">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
                </div>

                <div class="mb-3">
                    <label for="estado" class="block text-sm font-medium text-gray-700">Estado:</label>
                    <select class="form-control mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" id="estado" name="estado" required>
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>

                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Guardar✔️
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
