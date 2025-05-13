<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Solicitudes - PROA</title>

        <link rel="preload" href="../../css/headeryfooterPROA.css" as="style" />
        <link rel="stylesheet" href="../../css/headeryfooterPROA.css" />
        <link rel="stylesheet" href="../../css/solicitudes.css" />


</head>
<body>

<!-- Header -->
<?php include "../includes/headerPROA.php" ?>


<main>
<div class="contenedor-formulario">
    <section class="formulario">
        <h1>Realiza tu solicitud</h1>
        <br>

        <div class="encolumna">
    <label for="asunto">Asunto:</label>
    <input type="text" id="asunto" placeholder="Escribe su asunto a tratar" required/>
        </div>

        <div class="encolumna">
    <label for="tema">Tema:</label>
    <select id="tema">
        <option value="">Seleccione su tema</option>
        <option value="PL">PL</option>
        <option value="Horario">Horario</option>
        <option value="Matrícula">Matrícula</option>
    </select>
        </div>


    <label for="descripción">Descripción:</label>
    <textarea id="descripción" cols="30" rows="5" placeholder="Describe su asunto a tratar" required></textarea>


        <div class="encolumna">
    <label for="archivo">¿Desea subir un archivo?</label>
    <input type="file" id="archivo" placeholder="Subir archivo">
        </div>

        <button onclick="enviarSolicitud()">Enviar solicitud</button>
        <p id="mensaje" class="mensaje"></p>
</section>
</div>
</main>


<!-- Footer -->
<?php include "../includes/footerPROA.php" ?>

<!-- Scripts -->
<script src="../../js/enviarSolicitud.js" defer></script>

</body>
</html>