<?php
session_start();  // Inicia la sesión al comienzo del archivo

// Verifica si el usuario está logueado
$usuario_logueado = isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"]);

// Si el usuario no está logueado, redirige al login
if (!$usuario_logueado) {
    header("Location: ./InicioSesionGTI.php");
    exit();
}

$usuarioLogueado = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Inicio de sesión PROA</title>
    <link rel="preload" href="css/Footer_Header_GTI.css" as="style" />
    <link rel="stylesheet" href="css/Footer_Header_GTI.css" />
    <link rel="stylesheet" href="css/InicioSesionProa.css" />
    <link rel="stylesheet" href="css/variablesGTI.css" />
   ]
</head>
<body>
<!-- Header -->
<?php include "app/includes/headerGTI.php" ?>

  <main class="container">
    <section class="image-section">
        <img src="../img/Inicio_Sesion_Proa.png" alt="Login PROA" />
    </section>

    <section class="login-section">
      <h1>Inicia sesión en PROA</h1>
        <form id="loginForm" action="app/includes/validarInicioSesion.php" method="POST">
        <label for="rolSeleccionado">Opciones de rol para PROA</label>
            <select id="rolSeleccionado" name="rol" required onchange="completarDatos()">
                <option value="">Selecciona un rol</option>
                <option value="pas">Personal de Administración y Servicios</option>
                <option value="profesor">Profesor</option>
                <option value="alumno">Alumno</option>
            </select>

            <label for="correo">Correo electrónico</label>
            <input type="email" id="correo" name="correo" placeholder="Introduce tu correo electrónico" required autocomplete="email">

            <label for="contraseña">Contraseña</label>
            <input type="password" id="contraseña" name="contraseña" placeholder="Introduce tu contraseña" required autocomplete="current-password"/>

            <button>
                <a id="acceder" href="#" class="boton-acceder">Acceder</a>
            </button>
            <div id="mensajeError" class="error"></div>
        </form>
    </section>
</main>

<!-- Footer -->
<?php include "app/includes/footerGTI.php" ?>
<!-- fin del Footer -->

<script src="js/pruebaloginPROA.js" ></script>
<script src="js/botonMicuenta.js" ></script>
</body>
</html>