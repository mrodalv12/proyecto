<?php
include "../includes/datos_usuario.php";

if ($thisUser->rol != "Profesor") {
    echo "Acceso denegado. No tienes permisos para ver esta página.";
    exit();
}
?>
<!----------------------------------------------------------------------------------------------------------->
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROA</title>
    <link rel="stylesheet" href="../../css/inicioPAS.css"> <!--QUITAR LUEGO-->
    <link rel="stylesheet" href="../../css/header_footer.css">
</head>
<body>
    <header>
        <?php include "../includes/header_proa.php"?>
    </header>

    <main class="contenido">
        <H1>hallo, es un inicio Profesor</H1>
    </main>

    <footer>
        <?php include "../includes/footer_proa.php"?>
    </footer>

</body>
</html>