<!DOCTYPE html>
<html>
<head>

  <title>Burger Hut</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>
	<header>
	  <div class="logo">
		<img src="iconlogo.png" alt="Berger Hut Logo">
	  </div>
	  <nav>
		<ul>
		  <li><a href="#about">Acerca de Burger Hut</a></li>
		  <li><a href="#menu">Menu</a></li>
		  <li><a href="#reservations">Reservaciones</a></li>
		  <li><a href="#contact">Contacto</a></li>
		</ul>
	  </nav>
	</header>

<section class="home">
  <div class="hero-content">
    <h1>Bienvenidos a Burger Hut</h1>
    <p>Experimente el sabor de la perfección</p>
    <a href="#menu" class="btn">Explora nuestro menú</a>
  </div>
</section>

<section class="about dark-theme" id="about">
  <div class="about-content">
    <h2>Acerca de Burger Hut</h2>
    <p>Pruebe las mejores hamburguesas gourmet en un ambiente acogedor. En Burger Hut, nos dedicamos a ofrecer sabores excepcionales que deleitarán su paladar.</p>
    <p>Nuestros chefs elaboran meticulosamente cada hamburguesa con ingredientes de origen local y combinaciones de sabores únicas. Desde jugosas hamburguesas de carne hasta deliciosas opciones vegetarianas, hay algo para todos los gustos.</p>
    <a href="#menu" class="btn">Explora nuestro menú</a>
  </div>
  <div class="about-image">
    <img src="about-image.jpg" alt="About Image">
  </div>
</section>


<section class="menu" id="menu">
  <h2>Nuestro menu</h2>
  <div class="menu-items">
    <div class="menu-item">
      <img src="burger1.jpg" alt="Burger 1">
      <h3>Hamburguesa con queso clásica</h3>
      <p>Una jugosa hamburguesa de carne con queso derretido, lechuga fresca, tomate y nuestra salsa especial. Servida con una guarnición de papas fritas crujientes.</p>
    </div>
    <div class="menu-item">
      <img src="burger2.jpg" alt="Burger 2">
      <h3>Delicias vegetarianas</h3>
      <p>Una deliciosa hamburguesa vegetariana elaborada con una mezcla de verduras frescas y especias. Cubierta con aguacate, brotes y mayonesa picante. Servida con una guarnición de batatas fritas.</p>
    </div>
    <div class="menu-item">
      <img src="burger3.jpg" alt="Burger 3">
      <h3>Hamburguesa de barbacoa picante</h3>
      <p>Una hamburguesa picante llena de sabor! Pechuga de pollo a la parrilla bañada en salsa barbacoa picante, cubierta con jalapeños, aros de cebolla crujientes y mayonesa chipotle. Servida con una guarnición de ensalada de col.</p>
    </div>
  </div>
</section>

<section class="reservations" id="reservations">
  <div class="reservation-form">
    <h2>Hacer una Reserva</h2>
    <form method="post" autocomplete="off">
      <input type="text" name="name" placeholder="Nombre" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="tel" name="phone" placeholder="Numero de Telefono" required>
      <input type="date" name="date" required>
      <input type="time" name="time" required>
      <textarea name="message" placeholder="Mensaje adicional" rows="5"></textarea>
      <button type="submit" name="send" onClick="myFunction()">Enviar</button>
    </form>
  </div>
</section>


<section class="testimonials" id="testimonials">
  <h2>Lo que dicen nuestros clientes</h2>
  <div class="testimonial">
    <img src="customer1.jpg" alt="Customer 1">
    <p>"Las hamburguesas de Burger Hut son simplemente increíbles. Los sabores son intensos y los ingredientes siempre frescos. Es mi lugar de referencia cuando tengo antojo de una comida deliciosa".</p>
    <h4>John Doe</h4>
  </div>
  <div class="testimonial">
    <img src="customer2.jpg" alt="Customer 2">
    <p>"Burger Hut nunca decepciona. La calidad de sus hamburguesas y el amable servicio hacen que sea una experiencia gastronómica de primera. ¡Lo recomiendo encarecidamente a todos los amantes de las hamburguesas!"</p>
    <h4>Jane Smith</h4>
  </div>
</section>


<section class="gallery" id="gallery">
  <h2>Galeria</h2>
  <div class="image-grid">
    <div class="image-item">
      <img src="gallery1.jpg" alt="Image 1">
    </div>
    <div class="image-item">
      <img src="gallery2.jpg" alt="Image 2">
    </div>
    <div class="image-item">
      <img src="gallery3.jpg" alt="Image 3">
    </div>
    <div class="image-item">
      <img src="gallery4.jpg" alt="Image 4">
    </div>
  </div>
</section>

<section class="contact" id="contact">
  <div class="contact-container">
    <h2>Contactanos</h2>
    <div class="contact-info">
      <div class="info-item">
        <i class="fas fa-phone-alt"></i>
        <p>+57 312 255 7308</p>
      </div>
      <div class="info-item">
        <i class="fas fa-envelope"></i>
        <p>info@burgerhut.com</p>
      </div>
    </div>
    <form class="contact-form" method="post" autocomplete="off">
      <input type="text" name="nameContact" placeholder="nombre" required>
      <input type="email" name="emailContact" placeholder="Email" required>
      <textarea name="messageContact" placeholder="Mensaje" rows="5" required></textarea>
      <button type="submit" name="send" onClick="myFunction()">Enviar mensaje</button>
    </form>
  </div>
</section>




<footer class="footer">
  <div class="footer-content">
    <div class="footer-logo">
      <img src="iconlogo.png" alt="Logo">
    </div>
    <nav class="footer-links">
      <a href="#about">Acerca de Burger Hut</a>
      <a href="#menu">Menu</a>
      <a href="#reservations">Reservaciones</a>
      <a href="#testimonials">Testimonios</a>
      <a href="#gallery">Galeria</a>
    </nav>
</footer>

<?php
include("process_contact.php");
include("process_reservation.php");
?>
<script>
function myFunction() {
    window.location.href"http//localhost/pagina2"
}
</script>

</body>