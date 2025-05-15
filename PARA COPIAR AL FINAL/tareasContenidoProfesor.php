<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Entregar Tareas</title>
    <link rel="preload" href="../../css/headeryfooterPROA.css" as="style" />
    <link rel="stylesheet" href="../../css/headeryfooterPROA.css" />
    <link rel="stylesheet" href="../../css/tareasContenidoProfesor.css" />
</head>
<body>

<!-- Header -->
<?php include "../includes/headerPROA.php" ?>

<main class="main">
    <h1><a href="tareasProfesor.php">TAREAS</a></h1>
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

    <!-- Contenedor derecho para archivo y calificación -->
    <div class="contenedor-derecho">
        <!-- Contenedor con fondo -->
        <div class="archivo-box">
            <span class="archivo-nombre">Tarea.pdf</span>
        </div>

        <!-- Botón de descarga alineado a la derecha -->
        <div class="archivo-section">
            <a href="Tarea.pdf" download class="btn-descargar" title="Descargar">⬇ Descargar</a>
        </div>

        <!-- Calificación -->
        <div class="acciones">
            <div class="calificacion">
                <span class="label">CALIFICACIÓN:</span>
                <input type="number" id="nota" min="0" max="10" class="nota-input">
            </div>
            <button class="btn-guardar" onclick="guardarCalificacion()">Guardar cambios</button>
        </div>
    </div>

<!-- Mensaje -->
    <p id="mensaje" class="mensaje"></p>
</main>

<!-- Footer -->
<?php include "../includes/footerPROA.php" ?>

<script src="../../js/tareasContenidoProfesor.js"></script>
</body>
</html>