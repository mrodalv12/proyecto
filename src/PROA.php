<?php
session_start();  // Inicia la sesión al comienzo del archivo

// Verifica si el usuario está logueado
$usuario_logueado = isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"]);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROA - GTI</title>
    <link rel="preload" href="css/Footer_Header_GTI.css" as="style" />
    <link rel="stylesheet" href="css/Footer_Header_GTI.css" />
    <link rel="stylesheet" href="css/PROA_producto.css">
    <link rel="stylesheet" href="css/variablesGTI.css" />
</head>
<body>

<!-- Header -->
<?php include "./app/includes/headerGTI.php" ?>

<main>
    <section class="info">
        <h1>PROA</h1>
        <img src="../img/CALENDARIO_MES.png" alt="Ejemplo Calendario PROA">
        <p>PROA ya está disponible... ¡al alcance de un clic!<br>
            Descubre una nueva forma de trabajar, más ágil, clara y adaptada a las necesidades de hoy.<br>
            Diseñada pensando en ti: fácil de usar, accesible desde cualquier dispositivo y lista para ayudarte a dar el siguiente paso.</p>
        <?php if ($usuario_logueado): ?>
            <a href="InicioSesionProa.php"><div class="demo">¡Prueba la demo ya! </div></a>
        <?php else: ?>
            <a href="RegistroGTI.php"><div class="demo">¡Regístrate para probar la demo!</div></a>
        <?php endif; ?>
    </section>

    <section class="imagen">
        <img src="../img/CALENDARIO_MES.png" alt="Ejemplo Calendario PROA">
    </section>
</main>

<!-- Footer -->
<?php include "./app/includes/footerGTI.php" ?>


<?php if ($usuario_logueado): ?>
    <script src="js/ProaRegistrado.js"></script>
<?php endif; ?>
</body>
</html>