<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GTI - Plataforma PROA</title>
    <link rel="preload" href="./src/css/Footer_Header_Noregistrado.css" as="style" />
    <link rel="stylesheet" href="./src/css/Footer_Header_Noregistrado.css" />
    <link rel="stylesheet" href="./src/css/InicioSesion.css" />


</head>
<body>

<!-- Header -->
<?php include "./src/app/includes/headerGTI.php" ?>

<main class="main-content">
    <div class="login-box">
        <h2>Inicia sesión</h2>
        <form id="loginForm" method="POST" action="./src/app/includes/InicioSesion.php">
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
        <img src="/img/Inicio_Registro.png" alt="Inicio de sesión" />
    </div>
</main>

<!-- Footer -->
<?php include "./src/app/includes/footerGTI.php" ?>


</body>
</html>