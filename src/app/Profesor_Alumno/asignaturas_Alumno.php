<?php
include "../includes/funciones_inicio.php";
require 'asignaturas_controladorAlumno.php';
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
</head>
<body>
<!--encabezado-->
<?php include "../includes/header_proa_alumno.php" ?>
<!--fin del encabezado-->

<section class="contenido">
    <!--parte de más arriba-->
    <div class="parte_de_arriba">
        <h1>Asignaturas</h1>

        <!--buscador-->
        <div>
            <form class="buscador" method="GET">
                <button type="submit"><img src="../../img/iconoBuscar.png" alt="Buscar"></button>
                <input type="search" name="busqueda" placeholder="Nombre de la asignatura..." value="<?= htmlspecialchars($busqueda) ?>">
            </form>
        </div>
    </div>

    <!--filtros y tabla-->
    <div class="parte_de_abajo">
        <!--filtros-->
        <aside>
            <div class="titulo_filtrar">
                <img src="../../img/iconofiltrar.svg" alt="imagen_filtrar">
                <h2>Filtrar</h2>
            </div>
            <form method="GET">
                <!-- Filtro por curso -->
                <div class="curso">
                    <h3>Curso:</h3>
                    <ul>
                        <?php for ($i = 1; $i <= 4; $i++): ?>
                            <li><label>
                                    <input type="checkbox" name="curso[]" value="<?= $i ?>" <?= in_array((string)$i, $cursos) ? 'checked' : '' ?>><?= $i ?>º
                                </label></li>
                        <?php endfor; ?>
                    </ul>
                </div>

                <!-- Filtro por semestre -->
                <div class="semestre">
                    <h3>Semestre:</h3>
                    <ul>
                        <?php foreach (['A', 'B'] as $sem): ?>
                            <li><label>
                                    <input type="checkbox" name="semestre[]" value="<?= $sem ?>" <?= in_array($sem, $semestres) ? 'checked' : '' ?>><?= $sem ?>
                                </label></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!--esto es para el filtro en modo telefono-->
                <div class="filtros-responsive">
                    <label for="curso-select">Curso:</label>
                    <select name="curso[]" id="curso-select" required>
                        <option value="" selected>Curso</option>
                        <?php for ($i = 1; $i <= 4; $i++): ?>
                            <option value="<?= $i ?>" <?= in_array((string)$i, $cursos) ? 'selected' : '' ?>><?= $i ?>º</option>
                        <?php endfor; ?>
                    </select>

                    <label for="semestre-select">Semestre:</label>
                    <select name="semestre[]" id="semestre-select" required>
                        <option value="" selected>Semestre</option>
                        <?php foreach (['A', 'B'] as $sem): ?>
                            <option value="<?= $sem ?>" <?= in_array($sem, $semestres) ? 'selected' : '' ?>><?= $sem ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!--fin del filtro en modo telefono-->

                <input type="hidden" name="busqueda" value="<?= htmlspecialchars($busqueda) ?>">
                <button type="submit">Aplicar Filtros</button>
            </form>
        </aside>

        <!--tabla de asignaturas-->
        <main>
            <table>
                <tr>
                    <th class="nom_column"><p>Nombre</p></th>
                    <th class="curs_column"><p>Curso</p></th>
                    <th class="semes_column"><p>Semestre</p></th>
                </tr>
                <?= $tablaAsignaturas ?>
            </table>
        </main>
    </div>
</section>

<!--footer-->
<?php include "../includes/footer_proa.php" ?>
<script src="../../js/asignaturas.js"></script>
</body>
</html>