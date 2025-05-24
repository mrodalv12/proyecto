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
    <link rel="stylesheet" href="../../css/Alumno_Profesor/editarTareas.css" />

<body>



<!-- Header -->
<header>
    <?php include "../includes/header_proa_profesor.php" ?>
</header>


<main>
    <div class="container">
        <h2><a href="tareasProfesor.php">TAREAS</a></h2>
        <h3>Editar tarea</h3>

        <label>Título:
            <input type="text" id="titulo" value="Título tarea 1">
        </label>

        <label>Fecha de entrega:
            <input type="date" id="fecha" value="2025-06-05">
        </label>

        <label>Número de reenvíos:
            <select id="reenvios">
                <option value="">Seleccione</option>
                <option value="0">0</option>
                <option value="1">1</option>
            </select>
        </label>

        <label>Descripción:
            <textarea id="descripcion">Texto de ejemplo para edición...</textarea>
        </label>

        <label>Instrucciones:
            <textarea id="instrucciones">Texto de ejemplo para edición...</textarea>
        </label>

        <button onclick="guardarCambios()">Guardar cambios</button>
        <div class="alert" id="mensaje"></div>
    </div>

</main>

</body>

<!-- Footer -->
<footer>
    <?php include "../includes/footer_proa.php" ?>
</footer>

<script src="../../js/editarTarea.js"></script>
</html>
