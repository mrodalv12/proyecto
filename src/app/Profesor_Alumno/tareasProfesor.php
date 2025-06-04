<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tareas PROA</title>
    <link rel="stylesheet" href="../../css/header_footerPROA.css" />
    <link rel="stylesheet" href="../../css/variablesPROA.css" />
    <link rel="stylesheet" href="../../css/Alumno_Profesor/tareasProfesor.css" />
</head>
<body>

<!-- Header -->
<?php include "../includes/header_proa_profesor.php" ?>
<?php include "ver_tareas.php" ?>
<main>

    <section class="tasks-profesor">

        <!-- Título de "Tareas" -->
        <div class="tituloYvolver">
            <h1>Tareas: <?php echo htmlspecialchars($_SESSION['asignatura']['Nombre'] ?? 'Asignatura'); ?></h1>
            <?php $id_asignatura = $_SESSION['asignatura']['id_asignatura'] ?? null; ?>
            <button class="btn-volver" onclick="window.location.href='guiaDocenteprofesor.php?id_asignatura=<?= $id_asignatura ?>'"><-- Volver</button>
        </div>
        <div class="filtro-orden">
            <form method="get">
                <button type="submit" name="orden" value="asc">Orden A-Z</button>
                <button type="submit" name="orden" value="desc">Orden Z-A</button>
            </form>
        </div>

        <table>
            <thead>
            <tr>
                <th>Título</th>
                <th>Fecha de inicio</th>
                <th>Fecha de entrega</th>
                <th>Entregas</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($tarea = $result->fetch_assoc()): ?>
                    <tr>
                        <td><a href="tareasContenidoProfesor.php?id_tarea=<?= $tarea['id_tarea'] ?>">
                                <?= htmlspecialchars($tarea['Titulo']) ?>
                            </a></td>
                        <td>
                            <?php
                            $fechaInicio = new DateTime($tarea['fecha_inicio']);
                            echo $fechaInicio->format('j M Y');
                            ?>
                        </td>
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
                        </td>
                        <td class="resaltadaEditar">
                            <button type="button" class="botonmalo btnEliminar">Eliminar tarea</button>
                            <form method="POST" action="../handlers/PROA_profesor/eliminarTareas.php" class="formEliminar" style="display: none;">
                                <input type="hidden" name="eliminar" value="1">
                                <input type="hidden" name="id_tarea" value="<?= $tarea['id_tarea']; ?>">
                            </form>
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

        <!-- Botón para agregar una nueva tarea -->
        <button class="add-btn"><a href="agregarTareas.php">Agregar Tarea</a></button>
    </section>
</main>

<!-- Footer -->
<?php include "../includes/footer_proa.php" ?>

<script src="../../js/tareasProfesor.js"></script>
<script src="../../js/PROA/eliminarTarea.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>

<?php
$stmt->close();
$conn->close();
?>