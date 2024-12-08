<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">ALPA</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="images/menu.png" class="menu-icono" alt="">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#about">Nosotros</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Alpa Centro Medico</h1>
                <p>En ALPA, nos dedicamos a cuidar de tu salud y la de tu familia con servicios médicos de alta calidad. Nuestro equipo de especialistas trabaja con dedicación para ofrecer soluciones integrales en cada etapa de la vida. Contamos con instalaciones modernas y tecnología avanzada para garantizar un diagnóstico y tratamiento oportuno.</p>
                <a href="#formulario" class="btn-1">Agenda tu Cita</a>
            </div>
            <div class="header-img">
                <img src="images/left.png" alt="">
            </div>
        </div>
    </header>
    <section class="about container" id="about">
        <div class="about-img">
            <img src="images/about.png" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>En ALPA Centro Médico, entendemos que la salud es lo más importante. Somos un equipo multidisciplinario comprometido con brindarte atención personalizada, enfocada en tus necesidades individuales.</p>
            <br>
            <p>Desde consultas de rutina hasta tratamientos especializados, estamos aquí para acompañarte en cada momento. Nos esforzamos por crear un ambiente de confianza y calidez para que tú y tus seres queridos se sientan en las mejores manos.</p>
        </div>
    </section>
    <main class="servicios" id="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>Pediatria</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-stethoscope"></i>
                <h3>Ginecologia</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-bed-pulse"></i>
                <h3>Dermatologia</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-hospital"></i>
                <h3>Cardiologia</h3>
            </div>
        </div>
    </main>
    <section class="formulario container" id="formulario">
        <form method="post" autocomplete="off" id="miFormulario">
            <h2>Agenda tu consulta</h2>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apeliido" required>
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono Celular" required>
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo" required>
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la consulta"></textarea>
                </div>
                <input type="submit" name="send" class="btn" onClick="myFunction()">
            </div>
        </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="#" class="logo">ALPA</a>
            </div>
            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#about">Nosotros</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <?php
        include("send.php")
    ?>
    <script>
        function myFunction() {
            window.location.href"http//localhost/pagina1"
        }
    </script>
</body>
</html>