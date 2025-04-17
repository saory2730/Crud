<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Jessica Joyería</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-pink-50 to-blue-50 min-h-screen flex">
    <!-- Sidebar -->
    <aside class="w-60 bg-white shadow-md p-4">
        <h1 class="text-xl font-bold text-pink-600 mb-6">✨ Jessica Joyería ✨</h1>
        <nav class="space-y-2">
            <a href="{{ route('productos.index') }}" class="block text-gray-800 hover:text-blue-600">Productos 💍</a>
            <a href="{{ route('categorias.index') }}" class="block text-gray-800 hover:text-yellow-600">Categorías 📁</a>
        </nav>
    </aside>

    <!-- Contenido principal -->
    <main class="flex-1 p-8">
        @yield('content')
    </main>
</body>
</html>

