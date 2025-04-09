<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Jessica Joyería</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
        <a class="navbar-brand" href="{{ route('dashboard') }}">💎 Jessica Joyería</a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categorias.index') }}">📂 Categorías</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('productos.index') }}">💍 Productos</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-danger ms-3">Cerrar sesión</button>
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('login') }}">Iniciar sesión</a>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
