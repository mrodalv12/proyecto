<?php
include "../includes/funciones_inicio.php";
include "../includes/datos_usuario.php";
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROA</title>
    <link rel="stylesheet" href="../../css/Alumno_Profesor/asignaturas.css">
    <link rel="stylesheet" href="../../css/variablesPROA.css">
    <link rel="stylesheet" href="../../css/header_footerPROA.css">
    <link rel="stylesheet" href="../../css/Alumno_Profesor/MOVILmenu-Profesores_y_alumnos.css">
</head>
<body>
<!--encabezado-->
<?php include "../includes/header_proa_alumno.php" ?>
<!--fin del encabezado-->

<section class="contenido">
    <!--parte de mas arriba-->
    <div class="parte_de_arriba">
        <!--titulo-->
        <h1>Asignaturas</h1>
        <!--fin de titulo-->
        <!--buscador-->
        <div>
            <form class="buscador">
                <button type="submit"><img src="../../../img/iconoBuscar.png" alt="lupa"></button>
                <input type="search" placeholder="Nombre de la asignatura...">
                <button type="reset"><img src="../../../img/iconoborrarX.svg" alt="X"></button>
            </form>
        </div>
        <!--fin de buscador-->
    </div>
    <!--fin de parte de mas arriba-->
    <!--filtros y tabla-->
    <div class="parte_de_abajo">
        <!--filtros-->
        <aside>
            <img src="#" alt="imagen_filtrar">
            <h2>Filtrar</h2>
            <!--filtro por curso-->
            <div class="curso">
                <h3>Curso:</h3>
                <ul>
                    <li><label><input type="checkbox" name="curso" value="1">1º</label></li>
                    <li><label><input type="checkbox" name="curso" value="2">2º</label></li>
                    <li><label><input type="checkbox" name="curso" value="3">3º</label></li>
                    <li><label><input type="checkbox" name="curso" value="4">4º</label></li>
                </ul>
            </div>
            <!--fin de filtro por curso-->
            <!--filtro por semestre-->
            <div class="semestre">
                <h3>Semestre:</h3>
                <ul>
                    <li><label><input type="checkbox" name="curso" value="a">A</label></li>
                    <li><label><input type="checkbox" name="curso" value="b">B</label></li>
                </ul>
            </div>
            <!--fin de filtro por semestre-->
        </aside>
        <!--fin de filtros-->
        <!--tabla de asignaturas-->
        <main>
            <table>
                <tr>
                    <th class="nom_column">Nombre</th>
                    <th class="curs_column">Curso</th>
                    <th class="semes_column">Semestre</th>
                </tr>
                <tr>
                    <td class="nom_column"><a href="guiaDocenteAlumno.php">asignatura</a></td>
                    <td class="curs_column">1</td>
                    <td class="semes_column">B</td>
                </tr>
                <tr>
                    <td class="nom_column"><a href="guiaDocenteAlumno.php">asignatura</a></td>
                    <td class="curs_column">1</td>
                    <td class="semes_column">B</td>
                </tr>
                <tr>
                    <td class="nom_column"><a href="guiaDocenteAlumno.php">asignatura</a></td>
                    <td class="curs_column">1</td>
                    <td class="semes_column">B</td>
                </tr>
                <tr>
                    <td class="nom_column"><a href="guiaDocenteAlumno.php">asignatura</a></td>
                    <td class="curs_column">1</td>
                    <td class="semes_column">B</td>
                </tr>
            </table>
        </main>
    </div>
</section>
<!--footer-->
<?php include "../includes/footer_proa.php" ?>
<!--fin del footer-->
<script src="../../js/asignaturas.js"></script>
</body>
</html>