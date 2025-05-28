<?php
require_once '../includes/MySQL.inc';

if (!isset($_GET['id_asignatura'])) {
    echo "ID no proporcionado.";
    exit;
}

$id = $_GET['id_asignatura'];

// Obtener asignatura
$stmt = $conn->prepare("SELECT * FROM asignaturas WHERE id_asignatura = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $asignatura = $resultado->fetch_assoc();

} else {
    echo "Asignatura no encontrada.";
    exit;
}

// Obtener profesores
include './mostrarProfesorGuiaDocente.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PROA</title>
    <link rel="stylesheet" href="../../css/header_footerPROA.css"/>
    <link rel="stylesheet" href="../../css/variablesPROA.css">
    <link rel="stylesheet" href="../../css/Alumno_Profesor/guia_docente.css"/>
</head>
<body>
<?php include '../includes/header_proa_profesor.php' ?>
<?php $_SESSION['asignatura'] = $asignatura?>
<section class="contenido">
    <div class="intro_asig">
        <div class="titulo-volver">
            <h1><?= htmlspecialchars($asignatura['Nombre']) ?></h1>
            <a href="../Profesor_Alumno/tareasProfesor.php" class="tareas">
                <button class="boton_tareas">Tareas</button>
            </a>
        </div>
        <p><?= nl2br(htmlspecialchars($asignatura['Descripción'])) ?></p>
        <ul class="especificaciones_asign">
            <li><strong>Centro:</strong> <?= htmlspecialchars($asignatura['Centro']) ?></li>
            <li><strong>Departamento:</strong> <?= htmlspecialchars($asignatura['Departamento']) ?></li>
            <li><strong>Titulación:</strong> <?= htmlspecialchars($asignatura['Titulación']) ?></li>
            <li><strong>Lengua de docencia:</strong> <?= htmlspecialchars($asignatura['Idioma']) ?></li>
            <li><strong>Créditos:</strong> <?= htmlspecialchars($asignatura['Créditos']) ?></li>
            <li><strong>Cuatrimestre:</strong> <?= htmlspecialchars($asignatura['Cuatrimestre']) ?></li>
        </ul>
    </div>

    <hr>

    <div class="desplegables" id="guia_docente">
        <div class="titulo-guia">
            <h2 class="titulo-guia">Guía Docente</h2>
        </div>

        <details>
            <summary>Profesores</summary>
            <div class="contenedor_profesores">
                <?php foreach ($profesores as $profesor): ?>
                    <div class="profesor">
                        <img src="https://placehold.co/150x200" alt="Foto del profesor">
                        <div>
                            <strong><?= htmlspecialchars($profesor['Nombre'] . ' ' . $profesor['Apellidos']) ?></strong><br>
                            <?= htmlspecialchars($profesor['Correo']) ?><br>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </details>
    </div>
</section>

<footer role="contentinfo">
    <?php include '../includes/footer_proa.php' ?>
</footer>
</body>
</html>