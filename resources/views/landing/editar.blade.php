<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto - Jessica Joyería</title>
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
</head>
<body>

    <header>
        <h1>Editar producto 💎</h1>
        <a href="{{ route('productos.index') }}" class="btn">← Volver a la lista</a>
    </header>

    <main>
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>⚠️ {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('productos.update', $producto->id) }}" method="POST" class="formulario">
            @csrf
            @method('PUT')

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" required>

            <label for="material">Material:</label>
            <input type="text" name="material" id="material" value="{{ $producto->material }}">

            <label for="color">Color:</label>
            <input type="text" name="color" id="color" value="{{ $producto->color }}">

            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" step="0.01" value="{{ $producto->precio }}" required>

            <button type="submit" class="btn">Actualizar producto</button>
        </form>
    </main>

</body>
</html>
