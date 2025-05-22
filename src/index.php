<?php
session_start();  // Inicia la sesión al comienzo del archivo

// Verifica si el usuario está logueado
$usuario_logueado = isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"]);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GTI - Plataforma PROA</title>
    <link rel="preload" href="css/Footer_Header_GTI.css" as="style" />
    <link rel="stylesheet" href="css/Footer_Header_GTI.css" />
    <link rel="stylesheet" href="css/LandingPage.css" />
    <link rel="stylesheet" href="css/variablesGTI.css" />
</head>
<body>

<!-- Header -->
<?php include "./app/includes/headerGTI.php" ?>
<!-- fin del header -->


<main>

    <!-- Fondo y contenido de texto y CTA-->
<section class="hero" id="proa">
    <div class="hero-content">
        <h1>GTI lanza PROA: la nueva plataforma educativa</h1>
        <p>Accede a módulos formativos diseñados para estudiantes, docentes y centros.</p>

        <?php if ($usuario_logueado): ?>
            <!-- Contenido exclusivo para usuarios logueados -->
            <p>Bienvenido a tu plataforma. ¡Accede a tus recursos y empieza a aprender!</p>
        <?php else: ?>
            <!-- Contenido para los que no están logueados -->
            <a href="RegistroGTI.php" class="registro">¡Regístrate para probarla!</a>
        <?php endif; ?>
    </div>
</section>

<!-- Formulario contacto -->
<section class="contacto" id="contacto">
    <div class="formulario">
        <h2>¡Contáctanos!</h2>
        <form action="#" onsubmit="return enviarFormulario(event)">

            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" placeholder="Introduce tu correo electrónico" />


            <label for="asunto">Asunto:</label>
            <input type="text" id="asunto" name="asunto" placeholder="Introduce el asunto a tratar" />


            <label for="mensaje">Descripción:</label>
            <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje"></textarea>

            <button type="submit">Enviar</button>
            <div id="mensajeAviso" class="mensaje oculto"></div>
        </form>
    </div>
</section>
</main>

<!-- Footer -->
<?php include "./app/includes/footerGTI.php" ?>
<!-- fin del footer -->


<!-- Scripts -->
<?php if ($usuario_logueado): ?>
    <script src="js/botonMicuenta.js"></script>
<?php endif; ?>

<script src="js/enviarConsultaContacto.js"></script>
</body>
</html>