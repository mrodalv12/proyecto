<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tareas PROA</title>
    <link rel="stylesheet" href="../../css/header_footerPROA.css" />
    <link rel="stylesheet" href="../../css/variablesPROA.css" />
    <link rel="stylesheet" href="../../css/Alumno_Profesor/tareasProfesor.css" />
    <link rel="stylesheet" href="../../css/popupEliminar.css" />
</head>
<body>

<!-- Header -->
<?php include "../includes/header_proa_profesor.php" ?>
<?php include "ver_tareas.php" ?>
<!-- fin del Header -->

<!-- contenido del main -->
<main>
    <section class="tasks-profesor">
        <!-- titulos de la pagina -->
        <h1>TAREAS</h1>
        <h2>
            <a href="#">
                <?php echo htmlspecialchars($_SESSION['asignatura']['Nombre'] ?? 'Asignatura'); ?>
            </a>
        </h2>
        <!-- fin de titulos de la pagina -->
        <!-- inicio de tablas -->
        <table>
            <!-- fila de titulos de la tabla -->
            <thead>
            <tr>
                <th>Título</th>
                <th>Fecha de entrega</th>
                <th>Entregas</th>
                <th>Editar</th>
            </tr>
            </thead>
            <!-- fin de fila de titulos de la tabla -->
            <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($tarea = $result->fetch_assoc()): ?>
                    <tr>
                        <td><a href="tareasContenidoProfesor.php?id_tarea=<?= $tarea['id_tarea'] ?>">
                                <?= htmlspecialchars($tarea['Titulo']) ?>
                            </a></td>
                        <td>
                            <?php
                            $fechaEntrega = new DateTime($tarea['fecha_cierre']);
                            echo $fechaEntrega->format('j M Y');
                            ?>
                        </td>
                        <td class="resaltada">
                            <a href="listaAlumnos.php?id_tarea=<?php echo $tarea['id_tarea']; ?>" class="action-btn">Ver entregas</a>
                        </td>
                        <td class="resaltadaEditar">
                            <a href="editarTareas.php?id_tarea=<?php echo $tarea['id_tarea']; ?>" class="edit-btn">Editar tarea</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">No hay tareas para esta asignatura.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
        <!-- fin de tablas -->

        <!-- Botón para agregar una nueva tarea -->
        <button class="add-btn"><a href="agregarTareas.php">Agregar Tarea</a></button>
    </section>
</main>

<!-- Footer -->
<?php include "../includes/footer_proa.php" ?>
<!-- fin de footer -->

<script src="../../js/tareasProfesor.js"></script>

</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
