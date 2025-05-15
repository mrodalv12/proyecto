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

    <!-- Dependiendo de si está logueado o no -->
    <?php if ($usuario_logueado): ?>
        <link rel="preload" href="./src/css/Footer_Header_Registrado.css" as="style" />
        <link rel="stylesheet" href="./src/css/Footer_Header_Registrado.css" />
        <link rel="stylesheet" href="./src/css/LandingPage_Registrado.css" />
    <?php else: ?>
        <link rel="preload" href="./src/css/Footer_Header_Noregistrado.css" as="style" />
        <link rel="stylesheet" href="./src/css/Footer_Header_Noregistrado.css" />
        <link rel="stylesheet" href="./src/css/LandingPage_No registrado.css" />
    <?php endif; ?>

</head>
<body>

<!-- Header -->
<?php include "./src/app/includes/headerGTI.php" ?>

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
            <form onsubmit="return enviarFormulario(event)">

                <label for="correo">Correo:</label>
                <input type="email" id="correo" placeholder="Introduce tu correo electrónico" />


                <label for="asunto">Asunto:</label>
                <input type="text" id="asunto" placeholder="Introduce el asunto a tratar" />


                <label for="mensaje">Descripción:</label>
                <textarea id="mensaje" placeholder="Escribe tu mensaje"></textarea>

                <button type="submit">Enviar</button>
            </form>
        </div>
        <div class="imagen-contacto">
            <img src="img/Contacto.png" alt="Contacto">
        </div>
    </section>
    <div id="mensajeAviso" class="mensaje oculto"></div>
</main>

<!-- Footer -->
<?php include "./src/app/includes/footerGTI.php"?>

<!-- Scripts -->
<?php if ($usuario_logueado): ?>
    <script src="./src/js/LandingPage_Registrado.js"></script>
<?php else: ?>
    <script src="./src/js/LandingPage_No registrado.js"></script>
<?php endif; ?>

</body>
</html>