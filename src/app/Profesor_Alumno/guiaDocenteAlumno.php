
<!----------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PROA</title>
    <link rel="stylesheet" href="../../css/header_footerPROA.css"/>
    <link rel="stylesheet" href="../../css/variablesPROA.css">
    <link rel="stylesheet" href="../../css/Alumno_Profesor/guia_docente.css"/>
    <link rel="stylesheet" href="../../css/Alumno_Profesor/MOVILmenu-Profesores_y_alumnos.css">
</head>


<body>
<!--Header-->
<?php include '../includes/header_proa_alumno.php' ?>

<!--Detalles de la Asignatura-->
<section class="contenido">
    <div class="intro_asig">
        <!--Nombre de la asignatura -->
        <div class="titulo-volver">
            <a href="guiaDocenteAlumno.php"><h1>Física</h1></a>
            <a href="../Profesor_Alumno/tareasAlumno.php" class="tareas">
                <button class="boton_tareas">Tareas</button>
            </a>
        </div>

        <!--Fin de nombre de asignaturas-->
        <!--Descripción de la asignatura-->
        <p>
            La asignatura de Física nos ayuda a entender cómo funciona mundo
            que nos rodea. A través de ella estudiamos conceptos como el
            movimiento, la energía, la fuerza, la electricidad o el sonido.
            Todo eso que parece invisible, pero que está presente en nuestro día a
            día, se explica con leyes y fórmulas que nos permiten predecir lo
            que va a pasar y resolver problemas reales.
            <br><br>
            Además, en Física no solo se aprenden teorías: también se hacen
            experimentos, se observa, se mide y se analizan resultados. Es una
            materia que estimula el pensamiento lógico, la curiosidad y el deseo
            de descubrir. Aunque a veces puede parecer difícil, poco a poco te
            das cuenta de que todo encaja como un gran rompecabezas.
        </p>
        <!--fin de descripción de la asignatura-->
        <!--Especificaciones de la asignatura-->
        <ul class="especificaciones_asign">
            <li><strong>Centro:</strong> Escuela Superior Politécnica de Gandía</li>
            <li><strong>Departamento:</strong> Dpt. de Ingeniería Electrónica</li>
            <li><strong>Titulación:</strong> Grado en Tecnologías Interactivas</li>
            <li><strong>Lengua de docencia:</strong> Castellano</li>
            <li><strong>Créditos:</strong> 6</li>
            <li><strong>Duración:</strong> Semestral</li>
        </ul>
        <!--fin de especificaciones de la asignatura-->

    </div>

    <hr> <!--Línea de separación-->

    <!--Inicio de guia docente-->
    <div class="desplegables" id="guia_docente">
        <div class="titulo-guia">
            <h2 class="titulo-guia">Guía Docente</h2>
        </div>

        <!--Desplegables de acordeón-->
        <!--Profesores-->
        <details>
            <summary>Profesores</summary>
            <div class="contenedor_profesores">

                <!--Profesor 1-->
                <div class="profesor">
                    <img src="https://placehold.co/150x200" alt="Foto del profesor">
                    <div>
                        <strong>Nombre Apellido Apellido</strong><br>
                        email@gmail.com<br>
                        Despacho 000
                    </div>
                </div>
                <!--fin de Profesor 1-->
                <!--Profesor 2-->
                <div class="profesor">
                    <img src="https://placehold.co/150x200" alt="Foto del profesor">
                    <div>
                        <strong>Nombre Apellido Apellido</strong><br>
                        email@gmail.com<br>
                        Despacho 000
                    </div>
                </div>
                <!--Fin de Profesor 2-->
            </div>
        </details>
        <!--fin de profesores-->

        <!--Unidades didácticas y distribución-->
        <details>
            <summary>Unidades didácticas y distribución</summary>
            <table class="tabla">
                <thead>
                <tr>
                    <th>Unidad</th>
                    <th>Teoría</th>
                    <th>Práctica</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1. Cinemática: el arte de describir el movimiento</td>
                    <td>2h</td>
                    <td>3h</td>
                </tr>
                <tr>
                    <td>2. Dinámica: fuerzas que mueven el mundo</td>
                    <td>3h</td>
                    <td>4h</td>
                </tr>
                <tr>
                    <td>3. Energía y trabajo: cómo se transforma y conserva la energía</td>
                    <td>5h</td>
                    <td>4h</td>
                </tr>
                <tr>
                    <td>4. Ondas y sonido: vibraciones que viajan</td>
                    <td>3h</td>
                    <td>2h</td>
                </tr>
                <tr>
                    <td>5. Electricidad y magnetismo: cargados de poder</td>
                    <td>3h</td>
                    <td>3h</td>
                </tr>
                <tr>
                    <td>6. Óptica y luz: explorando el comportamiento de la luz</td>
                    <td>4h</td>
                    <td>4h</td>
                </tr>
                </tbody>
            </table>
        </details>
        <!--fin de Unidades didácticas y distribución-->
    </div>
    <!--fin de guia docente-->
</section>
<!--fin de Detalles de la Asignatura-->

<!--Footer-->
<footer role="contentinfo">
    <?php include '../includes/footer_proa.php'?>
</footer>
<!--Fin del footer-->
</body>







