<?php
session_start();  // Inicia la sesión al comienzo del archivo

// Verifica si el usuario está logueado
$usuario_logueado = isset($_SESSION["usuario_proa"]) && !empty($_SESSION["usuario_proa"]);


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Inicio de sesión PROA</title>
    <link rel="preload" href="css/GTI/Footer_Header_GTI.css" as="style" />
    <link rel="stylesheet" href="css/GTI/Footer_Header_GTI.css" />
    <link rel="stylesheet" href="css/GTI/InicioSesionProa.css" />
    <link rel="stylesheet" href="css/variablesGTI.css" />
</head>
<body>
<!-- Header -->
<?php include "app/includes/headerGTI.php" ?>

<main class="container">
    <section class="image-section">
        <img src="img/Inicio_Sesion_Proa.png" alt="Login PROA" />
    </section>

    <section class="login-section">
        <h1>Inicia sesión en PROA</h1>
        <form id="loginForm" action="app/includes/validarInicioSesion.php" method="POST">

            <label for="correo">Correo electrónico</label>
            <input type="email" id="correo" name="correo" required>

            <label for="contraseña">Contraseña</label>
            <input type="password" id="contraseña" name="contraseña" required>

            <button type="submit" class="boton-acceder">Acceder</button>
            <div id="mensajeError" class="error">
                <?php include "app/includes/mensajeError.php" ?>
            </div>
        </form>
    </section>
</main>

<!-- Footer -->
<?php include "app/includes/footerGTI.php" ?>
<!-- fin del Footer -->

<script src="js/botonMicuenta.js"></script>
</body>
</html>
