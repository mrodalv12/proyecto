<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GTI - Plataforma PROA</title>
    <link rel="preload" href="../../css/Footer_Header_Noregistrado.css" as="style" />
    <link rel="stylesheet" href="../../css/Footer_Header_Noregistrado.css" />
    <link rel="stylesheet" href="../../css/InicioSesion.css" />

    
</head>
<body>

<!-- Header -->
<?php include "../includes/headerGTI.php" ?>

<main class="main-content">
    <div class="login-box">
        <h2>Inicia sesión</h2>
        <form id="loginForm">
            <label for="email">Nombre de usuario o correo electrónico</label>
            <input type="email" id="email" placeholder="Introduce tu correo electrónico" required />

            <label for="password">Contraseña</label>
            <input type="password" id="password" placeholder="Introduce tu contraseña" required />

            <button type="submit">Acceder</button>

            <p id="mensajeLogin"></p>
        </form>



        <p class="register">¿Todavía no tienes una cuenta? <a href="../GTI/RegistroGTI.php">¡Regístrate!</a></p>
    </div>
    <div class="image-box">
        <img src="/img/Inicio_Registro.png" alt="Inicio de sesión" />
    </div>
</main>

    <!-- Footer -->
    <?php include "../includes/footerGTI.php" ?>

    <!-- Scripts -->
    <script src="../../js/InicioSesion.js"></script>
</body>
</html>