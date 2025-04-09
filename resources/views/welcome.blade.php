<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jessica Joyería</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo-nombre">
                <img src="{{ asset('img/Recurso 7.png') }}" alt="Logo de Jessica Joyería">

                <span>Jessica Joyería</span>
            </div>
            <ul class="menu">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#contacto">Contacto</a></li>
                <li><a href="#guia">Guia de tallas</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
            </ul>
        </nav>
    </header>
    

    <section id="inicio" class="inicio">
        <div class="contenido">
            <h1>Bienvenidos a Jessica Joyería</h1>
            <p>Descubre la elegancia y el brillo que te mereces.</p>
            <a href="#productos" class="btn">Comprar ahora</a>
            <a href="#proximamente" class="btn-secundario">Próximamente...</a>
        </div>
    </section>

    <section id="productos" class="productos">
        <h2>Productos Disponibles</h2>
        <div class="grid-productos">
    
            <div class="producto">
                <img src="{{ asset('img/ii.jpg') }}" alt="Anillo de plata">
                <h3>Anillo De Compromiso</h3>
                <p>Descripción:Diamante en el centro</p>
                <p>Material: Plata</p>
                <p>Color: Plateado</p>
                <p>Precio: $100.000</p>
            </div>
    
            <div class="producto">
                <img src="{{ asset('img/imagen 4.jpg') }}" alt="Anillo dorado">
                <h3>Anillo Quinceañera</h3>
                <p>Descripción:Forma de corona con diamantes</p>
                <p>Material:Oro</p>
                <p>Color:Dorado</p>
                <p>Precio:$556.669</p>
            </div>
    
            <div class="producto">
                <img src="{{ asset('img/imagen 5.jpg') }}" alt="Brazalete dorado">
                <h3>Anillo Quinceañera</h3>
                <p>Descripción:Forma de corona</p>
                <p>Material: Oro</p>
                <p>Color:Dorado</p>
                <p>Precio:$200.000</p>
            </div>
    
            <div class="producto">
                <img src="{{ asset('img/imagen 6.jpg') }}" alt="Brazalete de plata">
                <h3>Anillo Quinceañera</h3>
                <p>Descripción:Forma de corona con diamantes</p>
                <p>Material:Olata</p>
                <p>Color:Dorado</p>
                <p>Precio: $500.000</p>
            </div>
    
            <div class="producto">
                <img src="{{ asset('img/p.jpg') }}" alt="Anillo de oro">
                <h3>Set De Anillos</h3>
                <p>Material:Oro</p>
                <p>Color: Dorado</p>
                <p>Precio:$300.000</p>
            </div>
    
        </div>
    </section>
    

    <section id="proximamente" class="proximamente">
        <h2>Próximamente</h2>
        <div class="carrusel">
            <div class="slider">
                <img src="{{ asset('img/juego de accesorios.jpg') }}" alt="Accesorio 1" />
                <img src="{{ asset('img/aretes.jpg') }}" alt="Accesorio 2" />
                <img src="{{ asset('img/brazalete.jpg') }}" alt="Accesorio 3" />
                <img src="{{ asset('img/collar.jpg') }}" alt="Accesorio 4" />
                <img src="{{ asset('img/tobillera.jpg') }}" alt="Accesorio 5" />
            </div>
        </div>
    </section>

    <section id="guia" class="guia-tallas">
        <h2>Guía de Tallas para Anillos</h2>
        <div class="guia-contenido">
            <div class="guia-texto">
                <p>
                    Sigue esta imagen para conocer tu talla correctamente.<br>
                    Asegúrate de medir bien tu dedo y comparar con la tabla.
                </p>
            </div>
            <div class="guia-imagen">
                <img src="{{ asset('img/talla.jpg') }}" alt="Guía de tallas de anillos">
            </div>
        </div>
    </section>
    
    

    <section id="contacto" class="contacto">
        <h2>Contáctanos</h2>
        <ul>
            <li>Email: joyeria@gmail.com</li>
            <li>WhatsApp: +57 0000000000</li>
            <li>Instagram: @joyeria</li>
        </ul>
    </section>

    <section id="nosotros" class="nosotros">
        <h2>Sobre Nosotros</h2>
        <p>En Jessica Joyería nos dedicamos a resaltar tu belleza con piezas únicas hechas con amor y dedicación. Fusionamos arte, elegancia y autenticidad para ofrecerte joyas inolvidables. Desde anillos personalizados hasta accesorios exclusivos, cuidamos cada detalle para ti.</p>
    </section>

    <footer>
        <p>&copy; 2025 Jessica Joyería. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
