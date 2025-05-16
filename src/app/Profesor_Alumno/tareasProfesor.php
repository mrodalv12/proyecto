<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tareas PROA</title>

    <link rel="stylesheet" href="../../css/headeryfooterPROA.css" />
    <link rel="stylesheet" href="../../css/MOVILmenu-Profesores_y_alumnos.css" />
    <link rel="stylesheet" href="../../css/tareasProfesor.css" />
    <link rel="stylesheet" href="../../css/popupEliminar.css" /> <!-- Nueva hoja de estilo -->

</head>
<body>

<!-- Header -->
<?php include "../includes/header_proa.php" ?>

<main>
    <section class="tasks-profesor">
        <h1>TAREAS</h1>
        <h2>ELECTRÓNICA</h2>

        <table>
            <thead>
            <tr>
                <th>Título</th>
                <th>Fecha de entrega</th>
                <th>Entregas</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>TÍTULO DE LA TAREA</td>
                <td>5 jun 2025</td>
                <td class="resaltada"><a href="listaAlumnos.php" class="action-btn">Ver entregas</a></td>
                <td class="resaltadaEditar"><a href="editarTareas.php" class="edit-btn">Editar tarea</a></td>
                <td class="resaltadaEliminar">
                    <button class="erase-btn"><img src="../../../img/Papelera.png" alt="Eliminar"></button>
                </td>
            </tr>

            <tr>
                <td>TÍTULO DE LA TAREA</td>
                <td>5 jun 2025</td>
                <td class="resaltada"><a href="listaAlumnos.php" class="action-btn">Ver entregas</a></td>
                <td class="resaltadaEditar"><a href="editarTareas.php" class="edit-btn">Editar tarea</a></td>
                <td class="resaltadaEliminar">
                    <button class="erase-btn"><img src="../../../img/Papelera.png" alt="Eliminar"></button>
                </td>
            </tr>
            <!-- Puedes repetir más filas -->
            </tbody>
        </table>
        <!-- Boton para agregar una nueva tarea -->
        <button class="add-btn"><a href="agregarTareas.php">Agregar Tarea</a></button>

    </section>

    <!-- POPUP DE CONFIRMACIÓN -->
    <div class="popup-overlay" id="popup">
        <div class="popup-box">
            <p>¿Estás seguro de que deseas eliminar esta tarea?</p>
            <div class="popup-actions">
                <button onclick="confirmarEliminacion()">Aceptar</button>
                <button onclick="cerrarPopup()">Cancelar</button>
            </div>
        </div>
    </div>

    <!-- MENSAJE DE ÉXITO -->
    <div id="mensaje" class="alert success"></div>

</main>

<!-- Footer -->
<?php include "../includes/footer_proa.php" ?>

<script src="../../js/tareasProfesor.js"></script> <!-- Archivo JS nuevo -->

</body>
</html>