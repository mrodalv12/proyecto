<?php
session_start();
include "../Profesor_Alumno/ver_contenido_tareaAlumno.php";
include "../includes/enviarArchivoAlumno.php";
$mensaje = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['adjunto'])) {
    $mensaje = procesarAdjunto();
}
?>

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

<!-- Título de "Tareas" -->
<div class="tituloYvolver">
    <h1>Tareas: <?php echo htmlspecialchars($_SESSION['asignatura']['Nombre'] ?? 'Asignatura'); ?></h1>
    <button class="btn-volver" onclick="window.location.href='tareasAlumno.php'"><-- Volver</button>
</div>

<!-- Título de la tarea (específica) -->
<h2><?= htmlspecialchars($tarea['Titulo']) ?></h2>

<?php if (!empty($mensaje)): ?>
    <div class="mensaje-box <?= (str_contains($mensaje, 'exito') || str_contains($mensaje, 'guardado')) ? 'mensaje-exito' : 'mensaje-error' ?>">
        <p><?= $mensaje ?></p>
    </div>
<?php endif; ?>

<!-- Contenedor con la información de la tarea -->
<div class="container">
    <?php if ($tarea): ?>
    <div class="info-box">
        <p><span><strong>Fecha de inicio:</strong></span>
            <?= htmlspecialchars($tarea['fecha_inicio']) ?></p>
        <p><strong>Fecha de entrega:</strong>
            <?= htmlspecialchars($tarea['fecha_cierre']) ?></p>
        <p><strong>Descripción de la tarea:</strong>
            <?= nl2br(htmlspecialchars($tarea['Descripcion'])) ?></p>
        <p><strong>Estado:</strong>
            No entregado</p>
        <p><strong>Instrucciones:</strong>
            <?= nl2br(htmlspecialchars($tarea['Instrucciones'])) ?></p>
    </div>
</div>
    <div class="archivos">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_tarea" value="<?= htmlspecialchars($tarea['id_tarea']) ?>">
            <label for="adjunto">Titulo</label>
            <input type="file" name="adjunto" id="adjunto">
            <input type="submit" class="btn-enviar" value="enviar">
        </form>
    </div>

<?php else: ?>
    <p style="color:red;">Tarea no encontrada o parámetros incorrectos.</p>
<?php endif; ?>

<!-- Footer -->
<?php include "../includes/footer_proa.php" ?>
<!-- fin de Footer -->
</body>
</html>

