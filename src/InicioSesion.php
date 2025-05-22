<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GTI - Plataforma PROA</title>
    <link rel="preload" href="./css/Footer_Header_GTI.css" as="style" />
    <link rel="stylesheet" href="./css/Footer_Header_GTI.css" />
    <link rel="stylesheet" href="./css/InicioSesion.css" />
    <link rel="stylesheet" href="./css/variablesGTI.css" />


</head>
<body>

<!-- Header -->
<?php include "app/includes/headerGTI.php" ?>
<!-- fin del Header -->

<main class="main-content">
    <!--todos los campos de login-->
    <div class="login-box">
        <h1>Inicia sesión</h1>
        <!--imputs y titulos-->
        <form id="loginForm" method="POST" action="../../proyecto/src/app/includes/InicioSesion.php">
            <!--nombre de usuario o correo-->
            <label for="usuario">Nombre de usuario o correo electrónico</label>
            <input type="text" id="usuario" name="usuario" placeholder="Introduce tu correo electrónico" required />
            <!--fin de nombre de usuario o correo-->
            <!--contrasena-->
            <label for="contraseña">Contraseña</label>
            <input type="password" id="contraseña" name="contraseña" placeholder="Introduce tu contraseña" required />
            <!-- fin de contrasena-->
            <!--boton enviar-->
            <button type="submit">Acceder</button>
            <p id="mensajeLogin"></p>
            <!--fin de boton enviar-->
        </form>
        <!-- fin de imputs y titulos-->
        <!--enlace que lleva a la pagina de registro si no tienes cuenta-->
        <p class="register">¿Todavía no tienes una cuenta? <a href="RegistroGTI.php">¡Regístrate!</a></p>
        <!--fin de enlace a registro-->
    </div>
</main>

<!-- Footer -->
<?php include "./app/includes/footerGTI.php" ?>
<!-- fin del footer  -->

</body>
</html>