<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tareas PROA</title>

    <link rel="preload" href="../../css/headeryfooterPROA.css" as="style" />
    <link rel="stylesheet" href="../../css/headeryfooterPROA.css" />
    <link rel="preload" href="../../css/MOVILmenu-Profesores_y_alumnos.css" as="style" />
    <link rel="stylesheet" href="../../css/MOVILmenu-Profesores_y_alumnos.css" />
    <link rel="stylesheet" href="../../css/agregarTareas.css" />

<body>



<!-- Header -->
<?php include "../includes/headerPROA.php" ?>


<main>
    <div class="container">
        <h2><a href="tareasProfesor.php">TAREAS</a></h2>
        <h3>Agregar tarea</h3>

        <label>Título:
            <input type="text" id="titulo">
        </label>

        <label>Fecha de entrega:
            <input type="date" id="fecha">
        </label>

        <label>Número de reenvíos:
            <select id="reenvios">
                <option value="">Seleccione</option>
                <option value="0">0</option>
                <option value="1">1</option>
            </select>
        </label>

        <label>Descripción:
            <textarea id="descripcion"></textarea>
        </label>

        <label>Instrucciones:
            <textarea id="instrucciones"></textarea>
        </label>

        <button onclick="agregarTarea()">Agregar tarea</button>
        <div class="alert" id="mensaje"></div>
    </div>


</main>

</body>

<!-- Footer -->
<?php include "../includes/footerPROA.php" ?>

<script src="../../js/agregarTareas.js"></script>
</html>
