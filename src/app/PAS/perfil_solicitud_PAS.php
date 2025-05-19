<!----------------------------------------------------------------------------------------------------------->
<?php
include "../includes/datos_usuario.php";

?>
<!----------------------------------------------------------------------------------------------------------->
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PROA</title>
    <link rel="preload" href="../../css/Perfil_solicitud_PAS.css" as="style" />
    <link rel="stylesheet" href="../../css/Perfil_solicitud_PAS.css">
    <link rel="stylesheet" href="../../css/header_footer.css">
</head>
<body>
<!-- encabezado-->
<?php include "../includes/header_proa_pas.php" ?>
<!-- fin del encabezado-->
<main>
    <div class="titulos">
        <h1>Perfil de usuario</h1>
        <h2><strong>rol:</strong>estudiante</h2>
    </div>
    <div class="info">
        <div class="fotodeusuario">
            <img src="../../../img/iconoPersona.png" alt="foto de usuario">
        </div>
        <div class="informacion">
            <div id="nombreycarrera">
                <div>
                    <h4><label>Nombre y Apellido</label></h4>
                    <div class="info_item"><p>Maria paprica me quiero matar</p></div>

                </div>
                <div>
                    <h4><label>Carrera</label></h4>
                    <div class="info_item"><p>Maria paprica me quiero matar</p></div>
                </div>
            </div>
            <div id="dni_pl_curso_pago">
                <div>
                    <h4><label>DNI</label></h4>
                    <div class="info_item"><p>12345678</p></div>
                </div>
                <div>
                    <h4><label>PL</label></h4>
                    <div class="info_item"><p>PL 2</p></div>
                </div>
                <div>
                    <h4><label>Curso</label></h4>
                    <div class="info_item"><p>tercer curso</p></div>
                </div>
                <div>
                    <h4><label>Pago</label></h4>
                    <div class="info_item"><p>al dia</p></div>
                </div>
            </div>
           <div id="asignaturas">
               <h4><label>Asignaturas</label></h4>
               <div>
                   <div class="item_asignatura"><p>asignatura 1</p></div>
                   <div class="item_asignatura"><p>asignatura 2</p></div>
                   <div class="item_asignatura"><p>asignatura 3</p></div>
                   <div class="item_asignatura"><p>asignatura 4</p></div>
                   <div class="item_asignatura"><p>asignatura 5</p></div>
                   <div class="item_asignatura"><p>asignatura 6</p></div>
               </div>
           </div>
            <button id="btn-editar">Modificar</button>
        </div>
    </div>

    <div id="mensaje" class="mensaje oculto"></div>
</main>
<!-- footer-->
<?php include "../includes/footer_proa.php" ?>
<!-- fin del footer-->
<script src="../../js/perfilSolicitudesPAS.js"></script>
</body>
</html>
