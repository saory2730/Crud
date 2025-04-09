<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jessica Joyería</title>
  <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">

</head>
<body>
  <header>
    <div class="logo">Jessica Joyería</div>
    <nav>
      <ul>
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#productos">Productos</a></li>
        <li><a href="#proximamente">Próximamente</a></li>
        <li><a href="#contacto">Contacto</a></li>
        <li><a href="#nosotros">Nosotros</a></li>
      </ul>
    </nav>
  </header>

  <section class="inicio-elegante-circular">
    <div class="contenido">
      <h1>Bienvenidos a Jessica Joyería</h1>
      <p>Descubre elegancia y brillo en cada detalle</p>
      <a href="#productos" class="btn">Comprar ahora</a>
      <a href="#proximamente" class="btn">Próximamente...</a>
    </div>
  </section>
  
  
  

  <section id="productos" class="productos">
    <h2>Productos Disponibles</h2>
    <div class="producto">
        <img src="{{ asset('img/joya1.jpg') }}" alt="Joya 1">

      <h3>Anillo De Compromiso</h3>
      <p>Material: Plata </p>
      <p>Color: Plateado</p>
      <p>Precio: $120.000</p>
    </div>
    <div class="producto">
      <img src="img/imagen 5.jpg" alt="Aretes de oro" />
      <h3>Anillo De Quinceañera</h3>
      <p>Material:Oro</p>
      <p>Color: Dorado</p>
      <p>Precio: $800.000</p>
    </div>
    <div class="producto">
      <img src="img/anillo 1.webp" alt="Pulsera artesanal" />
      <h3>Duo Anillos Matrimonio</h3>
      <p>Material:Plata</p>
      <p>Color:Plateado </p>
      <p>Precio: $300.000</p>
    </div>
    <div class="producto">
        <img src="img/anillo 2.webp" alt="Pulsera artesanal" />
        <h3>Duo Anillos Compromiso</h3>
        <p>Material:Plata</p>
        <p>Color:Plateado</p>
        <p>Precio: $355.000</p>
      </div>
      <div class="producto">
        <img src="img/imagen 4.jpg" alt="Pulsera artesanal" />
        <h3>Anillo De Quince</h3>
        <p>Material:Oro</p>
        <p>Color:Dorado</p>
        <p>Precio: $355.000</p>
      </div>
      <div class="producto">
        <img src="img/imagen 5.jpg" alt="Pulsera artesanal" />
        <h3>Anillo De Quince</h3>
        <p>Material:Oro</p>
        <p>Color:Dorado</p>
        <p>Precio: $305.000</p>
      </div>
      <div class="producto">
        <img src="img/imagen 6.jpg" alt="Pulsera artesanal" />
        <h3>Anillo De Quince</h3>
        <p>Material:Oro</p>
        <p>Color:Dorado</p>
        <p>Precio: $300.000</p>
      </div>
  </section>

  <section id="proximamente" class="proximamente">
    <h2>Próximamente</h2>
    <div class="carrusel">
      <div class="slider">
        <img src="img/juego de accesorios.jpg" alt="Producto futuro 1" />
        <img src="img/aretes.jpg" alt="Producto futuro 2" />
        <img src="img/brazalete.jpg" alt="Producto futuro 3" />
        <img src="img/collar.jpg" alt="Producto futuro 4" />
        <img src="img/tobillera.jpg" alt="Producto futuro 5" />
      </div>
    </div>
  </section>

  <section id="contacto" class="contacto">
    <h2>Contáctanos</h2>
    <p>¡Estamos aquí!</p>
    <br>
    <ul>
      <li>Email: joyeria@gmail.com</li>
      <li>WhatsApp: +57 0000000000</li>
      <li>Instagram: @joyeria</li>
    </ul>
  </section>

  <section id="nosotros" class="nosotros">
    <h2>Sobre Nosotros</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quibusdam id, minus iusto rem saepe facilis odio, vero distinctio aliquid atque similique? Ratione doloribus dicta, beatae quas quasi voluptate debitis.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt praesentium beatae voluptate aspernatur assumenda suscipit blanditiis aperiam! Dolorum dolores culpa debitis quam maiores blanditiis, possimus iure atque. Voluptatem, eius recusandae!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat eum magni et sequi ullam voluptate fugit aliquam nulla laboriosam quidem sunt, unde eligendi velit nemo sint dolor deserunt eaque earum!
    </p>
  </section>

  <footer>
    <p>&copy; 2025 Jessica Joyería. Todos los derechos reservados.</p>
  </footer>
</body>
</html>