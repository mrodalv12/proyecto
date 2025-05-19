<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/headeryfooterPROA.css" />
    <link rel="stylesheet" href="../../css/MOVILmenu-Profesores_y_alumnos.css" />
    <!-- archivos style -->
    <link href="../../css/calendario.css" rel="stylesheet">
    <title>Calendario</title>
</head>

<body>

<!-- Header -->
<?php include "../includes/header_proa.php" ?>

<main>
    <div id="container">
        <div id="header">
            <div id="monthDisplay"></div>

            <div>
                <button id="backButton">Anterior</button>
                <button id="nextButton">Siguiente</button>
            </div>

        </div>

        <div id="weekdays">
            <div>Domingo</div>
            <div>Lunes</div>
            <div>Martes</div>
            <div>Miércoles</div>
            <div>Jueves</div>
            <div>Viernes</div>
            <div>Sábado</div>
        </div>


        <!-- div dinamic -->
        <div id="calendar" ></div>


    </div>
    <!-- crear eventos -->
    <div id="newEventModal">
        <h2>Nuevo Evento</h2>
        <input id="eventTitleInput" placeholder="Event Title"/>
        <button id="saveButton"> Guardar</button>
        <button id="cancelButton">Cancelar</button>
    </div>

    <div id="deleteEventModal">
        <h2>Evento</h2>

        <div id="eventText"></div><br>


        <button id="deleteButton">Eliminar</button>
        <button id="closeButton">Cerrar</button>
    </div>

    <div id="modalBackDrop"></div>
</main>

<!-- Footer -->
<?php include "../includes/footer_proa.php" ?>

<script src="../../js/calendario.js"></script>

</body>
</html>