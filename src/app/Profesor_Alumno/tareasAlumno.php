<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas PROA</title>

    <link rel="preload" href="../../css/header_footerPROA.css" as="style" />
    <link rel="stylesheet" href="../../css/header_footerPROA.css" />
    <link rel="stylesheet" href="../../css/variablesPROA.css">
    <link rel="stylesheet" href="../../css/Alumno_Profesor/tareasAlumno.css" />
</head>
<body>

<!-- Header -->
<?php include "../includes/header_proa_profesor.php" ?>
<?php include "ver_tareas_alumno.php"; ?>

<main>
    <section class="tasks-container">
        <h1>TAREAS</h1>
        <h2><?php echo htmlspecialchars($_SESSION['asignatura']['Nombre'] ?? 'Asignatura'); ?></h2>

        <table>
            <thead>
            <tr>
                <th>Título</th>
                <th>Fecha de cierre</th>
            </tr>
            </thead>
            <tbody>
            <?php if (!empty($tareas)): ?>
                <?php foreach ($tareas as $tarea): ?>
                    <tr>
                        <td><a href="tareasContenido.php?id_tarea=<?= $tarea['id_tarea'] ?>&id_asignatura=<?= $_SESSION['asignatura']['id_asignatura'] ?>" class="task-link">
                                <?= htmlspecialchars($tarea['Titulo']) ?>
                            </a></td>
                        <td><?= date("j M Y", strtotime($tarea['fecha_cierre'])) ?></td> <!-- Sigue usando 'fecha_entrega' como clave -->
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No hay tareas asignadas para esta asignatura.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </section>
</main>

<!-- Footer -->
<?php include "../includes/footer_proa.php" ?>
</body>
</html>