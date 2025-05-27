<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tareas PROA</title>

    <link rel="preload" href="../../css/header_footerPROA.css" as="style" />
    <link rel="stylesheet" href="../../css/header_footerPROA.css" />
    <link rel="stylesheet" href="../../css/variablesPROA.css">
    <link rel="stylesheet" href="../../css/Alumno_Profesor/MOVILmenu-Profesores_y_alumnos.css" />
    <link rel="stylesheet" href="../../css/Alumno_Profesor/agregarTareas.css" />

<body>



<!-- Header -->
<?php include "../includes/header_proa_profesor.php" ?>
<!-- fin del Header -->

<main>
    <div class="container">
        <a href="tareasProfesor.php"><h2>TAREAS</h2></a>
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
<?php include "../includes/footer_proa.php" ?>
<!-- fin del footer  -->

<script src="../../js/agregarTareas.js"></script>
</html>