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

    <?php if ($usuario_logueado): ?>
        <link rel="preload" href="css/Footer_Header_Registrado.css" as="style" />
        <link rel="stylesheet" href="css/Footer_Header_Registrado.css" />
        <link rel="stylesheet" href="css/PROA_registrado.css">
    <?php else: ?>
        <link rel="preload" href="css/Footer_Header_Noregistrado.css" as="style" />
        <link rel="stylesheet" href="css/Footer_Header_Noregistrado.css" />
        <link rel="stylesheet" href="css/PROA_No registrado.css">
    <?php endif; ?>
</head>
<body>

<!-- Header -->
<?php include "./app/includes/headerGTI.php" ?>

<main>
    <section class="info">
        <h1>PROA</h1>
        <p>PROA ya está disponible... ¡al alcance de un clic!<br>
            Descubre una nueva forma de trabajar, más ágil, clara y adaptada a las necesidades de hoy.<br>
            Diseñada pensando en ti: fácil de usar, accesible desde cualquier dispositivo y lista para ayudarte a dar el siguiente paso.</p>
        <?php if ($usuario_logueado): ?>
            <a href="InicioSesionProa.php" class="demo">¡Prueba la demo ya!</a>
        <?php else: ?>
            <a href="RegistroGTI.php" class="demo">¡Regístrate para probar la demo!</a>
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