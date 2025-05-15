<?php
include "../includes/funciones_inicio.php";
include "../includes/datos_usuario.php";

?>
<!----------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PROA</title>
    <link rel="stylesheet" href="../../css/header_footer.css"/>
    <link rel="stylesheet" href="../../css/editar-guia.css"/>
    <link rel="stylesheet" href="../../css/MOVILmenu-Profesores_y_alumnos.css">
    <script src="../../js/editar_guia.js"></script>
</head>


<body>
<!--Header-->
<?php include '../includes/header_proa.php' ?>

<!--Formulario de edición-->
<main class="contenido">

    <!--Título-->
    <h1>Editar Guía Docente - Física</h1>

    <!-- Descripción de la asignatura -->
    <section>
        <h2>Descripción de la asignatura</h2>
        <textarea rows="5" placeholder="Escribe aquí la descripción de la asignatura"></textarea>
    </section>

    <!-- Evaluación -->
    <section>
        <h2>Evaluaciónes</h2>
        <h3>Evaluación Ordinaria</h3>
        <textarea rows="5" placeholder="Escribe aquí la evaluación ordinaria..."></textarea>

        <h3>Evaluación Extraordinaria</h3>
        <textarea rows="5" placeholder="Escribe aquí la evaluación extraordinaria..."></textarea>
    </section>

    <!-- Bibliografía -->
    <section>
        <h2>Bibliografía</h2>

        <h3>Bibliografía Obligatoria</h3>
        <div id="lista-obligatoria"></div>
        <button type="button" onclick="añadirLibro('obligatoria')">Añadir libro obligatorio</button>

        <h3>Bibliografía Adicional</h3>
        <div id="lista-adicional"></div>
        <button type="button" onclick="añadirLibro('adicional')">Añadir libro adicional</button>
    </section>


    <!-- Unidades Didácticas -->
    <section>
        <h2>Unidades Didácticas</h2>
        <table id="tabla-unidades">
            <thead>
            <tr><th>Unidad</th><th>Teoría</th><th>Práctica</th><th></th></tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text" value="1. Cinemática: el arte de describir el movimiento"></td>
                <td><input type="text" value="2h"></td>
                <td><input type="text" value="3h"></td>
                <td><button type="button" onclick="eliminarFila(this)">Eliminar</button></td>
            </tr>
            </tbody>
        </table>
        <button type="button" onclick="añadirFila()">Añadir unidad</button>
    </section>

    <!--Botón para guardar cambios y cancelar-->
    <div class="botones-abajo">
        <button id="guardar" class="boton_guardar">Guardar </button>
        <button id="cancelar" class="boton_cancelar">Cancelar</button>
    </div>


    <div id="mensaje" class="mensaje oculto"></div>

</main>


<!--Footer-->
<footer role="contentinfo">
    <?php include '../includes/footer_proa.php' ?>
</footer>
<!--Fin del footer-->
<script src="../../js/editar_guia.js"></script>
</body>