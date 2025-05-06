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

    <?php if ($usuario_logueado): ?>
        <link rel="preload" href="../../css/Footer_Header_Registrado.css" as="style" />
        <link rel="stylesheet" href="../../css/Footer_Header_Registrado.css" />
        <link rel="stylesheet" href="../../css/LandingPage_Registrado.css" />
    <?php else: ?>
        <link rel="preload" href="../../css/Footer_Header_Noregistrado.css" as="style" />
        <link rel="stylesheet" href="../../css/Footer_Header_Noregistrado.css" />
        <link rel="stylesheet" href="../../css/LandingPage_No registrado.css" />
    <?php endif; ?>

</head>
<body>

<!-- Header -->
<?php
if ($usuario_logueado) {
    include "../includes/headerGTIregistrado.php";
} else {
    include "../includes/headerGTI.php";
}
?>

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


<section class="contacto" id="contacto">
    <div class="formulario">
        <h2>¡Contáctanos!</h2>
        <form onsubmit="return enviarFormulario(event)">

            <label for="correo">Correo:</label>
            <input type="email" id="correo" placeholder="Introduce tu correo electrónico" required />

            <label for="asunto">Asunto:</label>
            <input type="text" id="asunto" placeholder="Introduce el asunto a tratar" required />

            <label for="mensaje">Descripción:</label>
            <textarea id="mensaje" placeholder="Escribe tu mensaje" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
    <section class="imagen-contacto">
        <img src="/img/Contacto.png" alt="Contacto">
    </section>
</section>

<!-- Footer -->
<?php if ($usuario_logueado) {
    include "../includes/footerGTIregistrado.php";
} else {
    include "../includes/footerGTI.php";
}
?>

<!-- Scripts -->
<?php if ($usuario_logueado): ?>
<script src="../../js/LandingPage_No registrado.js"></script>
<?php else: ?>
    <script src="../../js/LandingPage_No registrado.js"></script>
<?php endif; ?>

</body>
</html>