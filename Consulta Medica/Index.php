<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultorio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="Style.css">
</head>
<body>

    <header class="header">

        <div class="menu container">
            <a href="#" class="logo">Logo</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="/Images/menu.png" class="menu-icono" alt="menu">
            </label>

            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>

        </div>

        <div class="header-content container">
            <div class="header-txt">
                <h1>Medical center</h1>
                <p>
                    Misión: <br>
                    Brindar atención médica integral y de alta calidad a nuestros pacientes, promoviendo su bienestar físico y emocional. 
                    En Medicla Center, nos comprometemos a ofrecer servicios de salud innovadores y personalizados, con un enfoque humano, ético y profesional, utilizando tecnología avanzada y un equipo multidisciplinario para garantizar la salud y seguridad de nuestros pacientes. <br>
                    <br> Visión: <br> Ser el sanatorio líder en atención médica de calidad en Alto Paraná, reconocido por su excelencia, innovación y compromiso con la salud integral de la comunidad. En Medical Center, buscamos ser la primera opción de cuidado médico para nuestros pacientes, creando un ambiente de confianza, profesionalismo y respeto, donde la salud y el bienestar sean nuestra principal prioridad.
                </p>
                <a href="#" class="btn-1">Informacion</a>
            </div>
            <div class="header-img">
                <img src="/Images/left.png" alt="">
            </div>
        </div>
    </header>

    <section class="about container">

        <div class="about-img">
            <img src="/Images/about.png" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                En Sanatorio Medical Center, nos enorgullece ofrecer atención médica de calidad con un enfoque integral y personalizado. 
                Nuestra misión es garantizar el bienestar y la salud del departamento del Alto Paraná y del país, brindando servicios médicos de excelencia en un entorno moderno y de vanguardia.
            </p>
            <br>
            <p>
                Contamos con una infraestructura de última generación, equipada con tecnología avanzada que nos permite ofrecer diagnósticos y tratamientos precisos y efectivos. 
                Nuestro equipo de profesionales altamente capacitados, comprometidos con el cuidado y la salud de nuestros pacientes, se dedica a brindar una atención humana y de confianza en cada consulta.
            </p>
        </div>

    </section>

    <main class="servicios">

        <h2>Servicios</h2>

        <div class="servicios-content container">

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-hospital-user"></i>
                <h3>Pediatria</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-solid fa-stethoscope"></i>
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

    <section class="formulario container">

        <form method="post" autocomplete="off">

            <h2>Agenda Consulta</h2>

            <div class="input-group">

                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Telefono Celular">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la consulta"></textarea>
                </div>

                <input type="submit" name="send" class="btn" onclick="myFunction()">

            </div>
        </form>

    </section>

    <footer class="footer">

        <div class="footer-content container">

            <div class="link">
                <a href="#" class="logo">Logo</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>

        </div>

    </footer>

    <?php
        include("send.php");
    ?>

    <script>
        function myFunction() {
            window.location.href="http://localhost/Consulta%Medica"
        }
    </script>

</body>
</html>