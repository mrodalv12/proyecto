<?php
session_start();  // Inicia la sesión al comienzo del archivo
require_once 'app/includes/MySQL.inc';
// Verifica si el usuario está logueado
$usuario_logueado = isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"]);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROA - GTI</title>
    <link rel="preload" href="css/GTI/Footer_Header_GTI.css" as="style" />
    <link rel="stylesheet" href="css/GTI/Footer_Header_GTI.css" />
    <link rel="stylesheet" href="css/GTI/PROA_producto.css">
    <link rel="stylesheet" href="css/variablesGTI.css" />
</head>
<body>

<!-- Header -->
<?php include BASE_PATH . "app/includes/" . 'headerGTI.php' ?>
<!-- fin del Header -->
<main>
    <!-- esta es la zona de informacion de la pagina -->
    <section class="info">
        <!-- este es el texto -->
        <h1>PROA</h1>
        <img src="img/imgparaproa.png" alt="Ejemplo de proa">
        <p>PROA ya está disponible... ¡al alcance de un clic!<br>
            Descubre una nueva forma de trabajar, más ágil, clara y adaptada a las necesidades de hoy.<br>
            Diseñada pensando en ti: fácil de usar, accesible desde cualquier dispositivo y lista para ayudarte a dar el siguiente paso.</p>
        <!-- fin del texto -->
        <!-- este es el boton para probar proa -->
        <?php if ($usuario_logueado): ?>
            <!-- si estas logueado en GTI, te lleva al login de proa -->
            <a href="InicioSesionProa.php"><div class="demo">¡Prueba la demo ya! </div></a>
        <?php else: ?>
            <!-- si NO estas logueado en GTI, te lleva al registro de GTI -->
            <a href="RegistroGTI.php"><div class="demo">¡Regístrate para probar la demo!</div></a>
        <?php endif; ?>
        <!-- fin de boton para probar proa -->
    </section>
    <!-- esta es una imagen de muestra de proa -->
    <section class="imagen">
        <img src="img/imgparaproa.png" alt="Ejemplo de proa">
    </section>
    <!-- este es el final de la imagen de muestra -->
</main>

<!-- Footer -->
<?php include BASE_PATH . 'app/includes/' . 'footerGTI.php' ?>
<!--fin del Footer -->

    <?php if ($usuario_logueado): ?>
  <script src="js/botonMicuenta.js"></script>
    <?php endif; ?>
</body>
</html>