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
    <link rel="stylesheet" href="../../css/Alumno_Profesor/editarTareas.css" />
</head>
<body>



<!-- Header -->
<?php include "../includes/header_proa_profesor.php" ?>
<?php include "../handlers/PROA_profesor/editarTareas.php" ?>



<main>
    <div class="container">
        <h1><a href="tareasProfesor.php">TAREAS: <?php echo htmlspecialchars($_SESSION['asignatura']['Nombre'] ?? 'Asignatura'); ?></a></h1>
        <h2>Editar tarea</h2>

        <?php if (!empty($mensaje)): ?>
            <div class="alert <?= $tipoMensaje ?: 'error' ?>">
                <?= htmlspecialchars($mensaje) ?>
            </div>
        <?php endif; ?>


        <form method="POST" action="">
            <input type="hidden" name="id_tarea" value="<?php echo $tarea['id_tarea']; ?>">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="Titulo" value="<?php echo htmlspecialchars($tarea['Titulo']); ?>" required>


            <label>Fecha de entrega: </label>
            <input type="date" name="fecha_cierre" value="<?php echo $tarea['fecha_cierre']; ?>" required>


            <label>Descripción:  </label>
            <textarea name="Descripcion" required><?php echo htmlspecialchars($tarea['Descripcion']); ?></textarea>


            <label>Instrucciones:
                <textarea name="Instrucciones" required><?php echo htmlspecialchars($tarea['Instrucciones']); ?></textarea>
            </label>
            <div class="botones">
                <button type="submit" class="botonbueno">Guardar cambios</button>

        </form>

    </div>
</main>

<footer>
    <?php include "../includes/footer_proa.php"; ?>
    <script src="../../js/PROA/ocultarMensajeTareas.js" defer></script>
</footer>

</body>
</html>