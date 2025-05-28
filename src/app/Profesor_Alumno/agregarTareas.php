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
    <link rel="stylesheet" href="../../css/Alumno_Profesor/agregarTareas.css" />
<body>
<!-- Header -->
<?php include "../includes/header_proa_profesor.php"; ?>
<?php include "../handlers/PROA_profesor/agregarTareas.php"; ?>

<main>
    <div class="container">
        <a href="tareasProfesor.php"><h2>TAREAS</h2></a>
        <h3>Agregar tarea</h3>

        <?php if ($mensaje): ?>
            <div class="alert"><?= htmlspecialchars($mensaje) ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <label>Título:
                <input type="text" name="titulo" required>
            </label>

            <label>Fecha de entrega:
                <input type="date" name="fecha" required>
            </label>

            <label>Descripción:
                <textarea name="descripcion" required></textarea>
            </label>

            <label>Instrucciones:
                <textarea name="instrucciones" required></textarea>
            </label>

            <button type="submit">Agregar tarea</button>
        </form>
    </div>
</main>

<?php include "../includes/footer_proa.php"; ?>
</body>
</html>