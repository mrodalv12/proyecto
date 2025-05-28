<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Entregar Tareas</title>
    <link rel="preload" href="../../css/header_footerPROA.css" as="style" />
    <link rel="stylesheet" href="../../css/header_footerPROA.css" />
    <link rel="stylesheet" href="../../css/variablesPROA.css">
    <link rel="stylesheet" href="../../css/Alumno_Profesor/tareasContenidoProfesor.css" />

</head>
<body>

<!-- Header -->
<?php include "../includes/header_proa_profesor.php" ?>
<?php include "./ver_contenido_tareaProfesor.php" ?>

<main class="main">
    <h1><a href="tareasProfesor.php">TAREAS</a></h1>
    <h2><?= htmlspecialchars($tarea['Titulo']) ?></h2>

    <div class="info-box">
        <p><span>Fecha de entrega:</span> <?= htmlspecialchars($tarea['fecha_cierre']) ?></p>
        <p><span>Descripción de la tarea:</span>  <?= nl2br(htmlspecialchars($tarea['Descripcion'])) ?></p>
        <p><span>Estado: No entregado</span> </p>
        <p><span>Instrucciones:</span> <?= nl2br(htmlspecialchars($tarea['Instrucciones'])) ?></p>
    </div>


    <div class="contenedor-derecho">
        <?php if (!empty($tarea['archivo'])): ?>
            <div class="archivo-box">
                <span class="archivo-nombre"><?= htmlspecialchars($tarea['archivo']) ?></span>
            </div>

            <div class="archivo-section">
                <a href="../../archivos_tareas/<?= urlencode($tarea['archivo']) ?>" download class="btn-descargar" title="Descargar">⬇ Descargar</a>
            </div>
        <?php endif; ?>


    </div>

    <p id="mensaje" class="mensaje"></p>
</main>

<!--es es un footer-->
<?php include "../includes/footer_proa.php" ?>
<!--fin del footer-->
</body>
</html>