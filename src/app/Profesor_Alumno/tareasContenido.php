<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Entregar Tareas</title>
    <link rel="preload" href="../../css/header_footerPROA.css" as="style" />
    <link rel="stylesheet" href="../../css/header_footerPROA.css" />
    <link rel="stylesheet" href="../../css/variablesPROA.css">
    <link rel="stylesheet" href="../../css/Alumno_Profesor/tareasContenido.css" />
</head>
<body>

<!-- Header -->
<header>
    <?php include "../includes/header_proa_alumno.php" ?>
</header>

<?php include "../Profesor_Alumno/ver_contenido_tareaAlumno.php" ?>
<div class="container">
    <h1><a href="tareasAlumno.php">TAREAS</a></h1>

    <?php if ($tarea): ?>
        <h2><?= htmlspecialchars($tarea['Titulo']) ?></h2>

        <div class="info-box">
            <p>Fecha de entrega: <?= htmlspecialchars($tarea['fecha_cierre']) ?></p>
            <p>Descripción de la tarea: <?= nl2br(htmlspecialchars($tarea['Descripcion'])) ?></p>
            <p>Estado: No entregado</p>
            <p>Instrucciones:<?= nl2br(htmlspecialchars($tarea['Instrucciones'])) ?></p>
        </div>


        <div class="archivo-section">
            <div class="upload-decorator" onclick="document.getElementById('archivo-upload').click()">
                Haz clic o arrastra archivos aquí
                <input type="file" id="archivo-upload" multiple hidden />
            </div>

            <div id="archivo-display" class="archivo-display"></div>
            <p id="contador-archivos" class="contador-archivos"></p>

            <button class="btn-enviar" onclick="enviarArchivos()">Enviar</button>
            <p id="mensaje-enviado" class="mensaje-enviado">¡Archivos enviados!</p>
            <p id="mensaje-error" class="mensaje-error">
                Debes seleccionar al menos un archivo antes de enviar.
            </p>
        </div>

    <?php else: ?>
        <p style="color:red;">Tarea no encontrada o parámetros incorrectos.</p>
    <?php endif; ?>
</div>

<!-- Footer -->
<?php include "../includes/footer_proa.php" ?>

</body>
</html>