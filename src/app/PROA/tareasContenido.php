<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Entregar Tareas</title>
    <link rel="preload" href="../../../../../../Documents/UNI1/PROYECTO/proyecto/src/css/headeryfooterPROA.css" as="style" />
    <link rel="stylesheet" href="../../../../../../Documents/UNI1/PROYECTO/proyecto/src/css/headeryfooterPROA.css" />
    <link rel="stylesheet" href="../../../../../../Documents/UNI1/PROYECTO/proyecto/src/css/tareasContenido.css" />
    <link rel="stylesheet" href="../../../../../../Documents/UNI1/PROYECTO/proyecto/src/css/MOVILmenu-Profesores_y_alumnos.css" />
</head>
<body>

<!-- Header -->
<header>
<?php include "../includes/header_proa.php" ?>
</header>

<div class="container">
    <h1><a href="tareasAlumno.php">TAREAS</a></h1>
    <h2>Título de la tarea</h2>

    <div class="info-box">
        <p>Fecha de entrega: 5 junio 2025. 23:55</p>
        <p>Descripción de la tarea: Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <p>Número de reenvíos: 1</p>
        <p>Estado: No empezado</p>
        <p>Calificación: -/10</p>
    </div>

    <div class="instrucciones">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="archivo-section">
        <div class="upload-decorator" onclick="document.getElementById('archivo-upload').click()">
            Haz clic o arrastra archivos aquí

            <input type="file" id="archivo-upload" multiple hidden />
        </div>

        <div id="archivo-display" class="archivo-display"></div>
        <p id="contador-archivos" class="contador-archivos"></p>

        <button class="btn-enviar" onclick="enviarArchivos()">Enviar</button>
        <p id="mensaje-enviado" class="mensaje-enviado">¡Archivos enviados!</p>
        <p id="mensaje-error" class="mensaje-error">
            Debes seleccionar al menos un archivo antes de enviar.
        </p>

    </div>

</div>

<!-- Footer -->
<?php include "../includes/footer_proa.php" ?>

<script src="../../js/tareasContenido.js"></script>
</body>
</html>