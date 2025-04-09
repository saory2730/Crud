<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos - Jessica Joyería</title>
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f1eb;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #5a3b2c;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
        }

        .btn {
            padding: 8px 16px;
            background-color: #d6a85c;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn.delete {
            background-color: #cc4b4b;
        }

        .alert {
            margin: 20px;
            padding: 10px;
            background-color: #d1ffd1;
            border: 1px solid #7ec77e;
        }

        main {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }

        table th {
            background-color: #eee;
        }

        .acciones form {
            display: inline;
        }

        .acciones button, .acciones a {
            margin: 0 5px;
        }
    </style>
</head>
<body>

<header>
    <h1>✨ Productos Destacados ✨</h1>
    <a href="{{ route('productos.create') }}" class="btn">+ Agregar nuevo producto</a>
</header>

<main>
    @if (session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    @if ($productos->count())
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Material</th>
                    <th>Color</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->material }}</td>
                        <td>{{ $producto->color }}</td>
                        <td>${{ number_format($producto->precio, 2) }}</td>
                        <td class="acciones">
                            <a href="{{ route('productos.edit', $producto->id) }}" class="btn">✏️</a>
                            <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" onsubmit="return confirm('¿Estás segura de eliminar este producto?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete">🗑️</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay productos registrados aún.</p>
    @endif
</main>

</body>
</html>

