<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GTI - Plataforma PROA</title>
    <link rel="preload" href="css/GTI/Footer_Header_GTI.css" as="style" />
    <link rel="stylesheet" href="css/GTI/Footer_Header_GTI.css" />
    <link rel="stylesheet" href="css/GTI/InicioSesion.css" />
    <link rel="stylesheet" href="css/variablesGTI.css" />
</head>
<body>

<!-- Header -->
<?php include "app/includes/headerGTI.php" ?>

<main class="main-content">
    <div class="login-box">
        <?php include 'app/includes/mensajeExito.php'; ?>
        <h1>Inicia sesión</h1>
        <form id="loginForm" method="POST" action="app/handlers/inicio-sesion.php">
            <label for="email">Correo electrónico</label>
            <input type="text" id="email" name="email" placeholder="Introduce tu correo electrónico" required />

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Introduce tu contraseña" required />

            <button type="submit">Acceder</button>

            <p id="mensajeLogin"></p>
            <?php include 'app/includes/mensajeError.php'; ?>
        </form>
        <p class="register">¿Todavía no tienes una cuenta? <a href="RegistroGTI.php">¡Regístrate!</a></p>
    </div>
</main>

<!-- Footer -->
<?php include "app/includes/footerGTI.php" ?>

</body>
</html>