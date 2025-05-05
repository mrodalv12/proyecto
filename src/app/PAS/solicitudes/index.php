<?php
include "../includes/funciones.php";
include "../includes/datos_usuario.php";
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>pas</title>
    <link rel="preload" href="../../../css/solicitudesPAS.css" as="style" />
    <link rel="stylesheet" href="../../../css/solicitudesPAS.css">
    <link rel="stylesheet" href="../../../css/header_footer.css">
</head>
<body>
<?php include "../includes/headerPAS.php" ?>
<h1>Solicitudes</h1>

<!-- aqui comienza la bandeja de solicitudes-->
<section class="contenido">
    <ul class="bandeja_columna1">
        <li><button>Bandeja de entrada</button></li>
        <li><button>Solicitudes Hechas</button></li>
        <li><button>Papelera</button></li>
    </ul>
    <ul class="bandeja_columna2">
        <p>vacio...</p>
    </ul>
    <ul>
        <img src="../../../img" alt="icono sin solicitudes">
        <p>No hay solicitudes que atender</p>
    </ul>

</section>
<?php include "../includes/footer.php" ?>


</body>
</html>