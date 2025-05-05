<?php
include "../includes/funciones_inicio_PAS.php";
include "../includes/datos_usuario.php";

if ($thisUser->rol != "PAS") {
    echo "Acceso denegado. No tienes permisos para ver esta página.";
    exit();
}
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PROA</title>
    <link rel="preload" href="../../css/directorioPAS.css" as="style" />
    <link rel="stylesheet" href="../../css/directorioPAS.css">
    <link rel="stylesheet" href="../../css/header_footer.css">
</head>
<body>
<?php include "../includes/header_proa.php" ?>
<div class="contenido">
    <p>esto es el directorio</p>
</div>

<?php include "../includes/footer_proa.php" ?>

</body>
</html>
