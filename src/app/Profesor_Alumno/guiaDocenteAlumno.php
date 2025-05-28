<?php
require_once '../includes/MySQL.inc';

if (isset($_GET['id_asignatura'])) {
    $id = $_GET['id_asignatura'];

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
} else {
    echo "ID no proporcionado.";
    exit;
}
// Incluir el archivo que obtiene los profesores
include './mostrarProfesorGuiaDocente.php';
?>
<!----------------------------------------------------------------------------------------------------------->

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
<!--Header-->
<?php include '../includes/header_proa_alumno.php' ?>

<!--Detalles de la Asignatura-->
<section class="contenido">
    <div class="intro_asig">
        <!--Nombre de la asignatura -->
        <div class="titulo-volver">
            <h1><?= htmlspecialchars($asignatura['Nombre']) ?></h1>
            <a href="../Profesor_Alumno/tareasAlumno.php" class="tareas">
                <button class="boton_tareas">Tareas</button>
            </a>
        </div>

        <!--Descripción de la asignatura-->
        <p><?= nl2br(htmlspecialchars($asignatura['Descripción'])) ?></p>

        <!--Especificaciones-->
        <ul class="especificaciones_asign">
            <li><strong>Centro:</strong> <?= htmlspecialchars($asignatura['Centro']) ?></li>
            <li><strong>Departamento:</strong> <?= htmlspecialchars($asignatura['Departamento']) ?></li>
            <li><strong>Titulación:</strong> <?= htmlspecialchars($asignatura['Titulación']) ?></li>
            <li><strong>Lengua de docencia:</strong> <?= htmlspecialchars($asignatura['Idioma']) ?></li>
            <li><strong>Créditos:</strong> <?= htmlspecialchars($asignatura['Créditos']) ?></li>
            <li><strong>Cuatrimestre:</strong> <?= htmlspecialchars($asignatura['Cuatrimestre']) ?></li>
        </ul>
        <!--fin de especificaciones de la asignatura-->

    </div>

    <hr> <!--Línea de separación-->

    <!--Inicio de guia docente-->
    <div class="desplegables" id="guia_docente">
        <div class="titulo-guia">
            <h2 class="titulo-guia">Guía Docente</h2>
        </div>

        <!--Desplegables de acordeón-->
        <!--Profesores-->
        <details>
            <summary>Profesores</summary>
            <div class="contenedor_profesores">

                <!--Profesor 1-->
                <?php foreach ($profesores as $profesor): ?>
                    <div class="profesor">
                        <img src="https://placehold.co/150x200" alt="Foto del profesor">
                        <div>
                            <strong><?= htmlspecialchars($profesor['Nombre'] . ' ' . $profesor['Apellidos']) ?></strong><br>
                            <?= htmlspecialchars($profesor['Correo']) ?><br>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!--fin de Profesor 1-->
                <!--si hay más profesores para una asignatura se añaden aquí-->
            </div>
        </details>
        <!--fin de profesores-->
    </div>
    <!--fin de guia docente-->
</section>
<!--fin de Detalles de la Asignatura-->

<!--Footer-->
<footer role="contentinfo">
    <?php include '../includes/footer_proa.php'?>
</footer>
<!--Fin del footer-->
</body>







