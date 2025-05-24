<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Solicitudes - PROA</title>

        <link rel="preload" href="../../css/header_footerPROA.css" as="style" />
        <link rel="stylesheet" href="../../css/header_footerPROA.css" />
        <link rel="stylesheet" href="../../css/Alumno_Profesor/solicitudes_alumnoProfesor.css" />
    <link rel="stylesheet" href="../../css/Alumno_Profesor/MOVILmenu-Profesores_y_alumnos.css">


</head>
<body>

<!-- Header -->
<?php include "../includes/header_proa_profesor.php" ?>
<!-- fin del Header -->

<section>
    <!--Inicio de solicitudes-->
    <main class="formulario">
        <h1>Realiza tu solicitud</h1>
        <br>
        <!-- asunto -->
        <div class="encolumna">
            <label for="asunto">Asunto:</label>
            <input type="text" id="asunto" placeholder="Escribe su asunto a tratar" required/>
        </div>
        <!-- fin del asunto -->
        <!-- tema (alumno) o alumno referenciado (profesor) -->
        <div class="encolumna">
            <!--ejemplo alumno-->
            <label for="tema">Tema:</label>
            <select id="tema">
                <option value="">Seleccione su tema</option>
                <option value="PL">PL</option>
                <option value="Horario">Horario</option>
                <option value="Matrícula">Matrícula</option>
            </select>
            <!--fin de ejemplo alumno-->
        </div>
        <!-- fin de tema o alumno referenciado -->
        <!-- descripcion de la solicitud -->
        <div>
            <label for="descripción">Descripción:</label>
            <textarea id="descripción" cols="30" rows="5" placeholder="Describe su asunto a tratar" required></textarea>
        </div>
        <!-- fin de descripcion de la solicitud -->
        <!-- subir archivo adjunto -->
        <div class="encolumna">
            <label for="archivo">¿Desea subir un archivo?</label>
            <input type="file" id="archivo" placeholder="Subir archivo">
        </div>
        <!-- fin de subir archivos adjunto -->
        <!-- boton de enviar solicitud -->
        <button onclick="enviarSolicitud()">Enviar solicitud</button>
        <!-- fin de boton de enviar solicitud -->
        <!-- mensaje de exito o error -->
        <p id="mensaje" class="mensaje"></p>
        <!--fin de mensaje de exito o error -->
    </main>
    <!--Fin de solicitudes-->
</section>


<!-- Footer -->
<?php include "../includes/footer_proa.php" ?>
<!-- fin de footer -->

<!-- Scripts -->
<script src="../../js/enviarSolicitud.js" defer></script>
<!-- fin de Scripts -->

</body>
</html>