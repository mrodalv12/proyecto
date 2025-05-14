<!----------------------------------------------------------------------------------------------------------->
<?php
include "../includes/datos_usuario.php";

if ($thisUser->rol != "PAS") {
    echo "Acceso denegado. No tienes permisos para ver esta página.";
    exit();
}
?>
<!----------------------------------------------------------------------------------------------------------->
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PROA</title>
    <link rel="preload" href="../../css/Perfil_solicitud_PAS.css" as="style" />
    <link rel="stylesheet" href="../../css/Perfil_solicitud_PAS.css">
    <link rel="stylesheet" href="../../css/header_footer.css">
</head>
<body>
<!-- encabezado-->
<?php include "../includes/header_proa.php" ?>
<!-- fin del encabezado-->
<main>
    <p>esto es el perfil de alguien seleccionado</p>
</main>
<!-- footer-->
<?php include "../includes/footer_proa.php" ?>
<!-- fin del footer-->
<script src="../../js/solicitudes_PAS.js"></script>
</body>
</html>
