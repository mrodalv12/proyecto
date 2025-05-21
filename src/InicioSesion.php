<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GTI - Plataforma PROA</title>
    <link rel="preload" href="./css/Footer_Header_GTI.css" as="style" />
    <link rel="stylesheet" href="./css/Footer_Header_GTI.css" />
    <link rel="stylesheet" href="./css/InicioSesion.css" />
    <link rel="stylesheet" href="css/variablesGTI.css" />


</head>
<body>

<!-- Header -->
<?php include "app/includes/headerGTI.php" ?>

<main class="main-content">
    <div class="login-box">
        <h2>Inicia sesión</h2>
        <form id="loginForm" method="POST" action="./app/includes/InicioSesion.php">
            <label for="usuario">Nombre de usuario o correo electrónico</label>
            <input type="text" id="usuario" name="usuario" placeholder="Introduce tu correo electrónico" required />

            <label for="contraseña">Contraseña</label>
            <input type="password" id="contraseña" name="contraseña" placeholder="Introduce tu contraseña" required />

            <button type="submit">Acceder</button>

            <p id="mensajeLogin"></p>
        </form>



        <p class="register">¿Todavía no tienes una cuenta? <a href="RegistroGTI.php">¡Regístrate!</a></p>
    </div>
    <div class="image-box">
        <img src="../img/Inicio_Registro.png" alt="Inicio de sesión" />
    </div>
</main>

<!-- Footer -->
<?php include "./app/includes/footerGTI.php" ?>


</body>
</html>