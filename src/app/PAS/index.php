<?php
include "./includes/funciones.php";
include "./includes/datos_usuario.php";

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>pas</title>
    <link rel="preload" href="../../css/inicioPAS.css" as="style" />
    <link rel="stylesheet" href="../../css/inicioPAS.css">
    <link rel="stylesheet" href="../../css/header_footer.css">
</head>
<body>
<?php include "./header_bienvenidos.php" ?>
<main class="contenido">
    <div class="saludo">
        <?php
        $hola = buenas();
        echo "<h1>$hola, $userName</h1>";
        ?>
    </div>
    <div class="solicitudes">
        <h2>solicitudes recientes</h2>
    </div>
</main>
<?php include "./includes/footer.php" ?>
</body>
</html>
