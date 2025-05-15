<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
    <link rel="preload" href="../../css/Footer_Header_Noregistrado.css" as="style" />
    <link rel="stylesheet" href="../../css/Footer_Header_Noregistrado.css" />
  <link rel="stylesheet" href="../../css/RegistroGTI.css">
</head>
<body>

<!-- Header -->
<?php include "../includes/headerGTI.php" ?>


  <main class="main-container">
      <!-- Formulario registro -->
    <section class="form-box">
      <h2>Crea una cuenta</h2>
      <form id="registroForm" action="../includes/RegistroGTI.php" method="POST">
        <label for="usuario">Nombre de usuario</label>

          <!-- El atributo name es lo que se envía al servidor, si no hay, no se envía nada, aunque tenga id -->
          <!-- Introduce el usuario -->
        <input type="text" id= "usuario" name="usuario" placeholder="Introduce tu nombre de usuario" >

        <label for="correo">Correo electrónico</label>
          <!-- Introduce el email -->
        <input type="email" id="email" name="correo" placeholder="Introduce tu correo electrónico" >

        <label for="contraseña">Contraseña</label>
          <!-- Introduce la contraseña -->
        <input type="password" id="contraseña" name="contraseña" placeholder="Introduce una contraseña" >

          <label for="confirmarContraseña">Contraseña</label>
          <!-- Vuelve a introducir la contraseña -->
          <input type="password" id="confirmarContraseña" name="confirmarContraseña" placeholder="Introduce una contraseña" >


        <button type="submit">Crear cuenta</button>

        <p id="mensajeRegistro" style="display:none;"></p>
        <p id="mensajeRegistro"></p>
      </form>

        <!-- Enlace para ir al login -->
      <p class="login-link">¿Ya tienes una cuenta? <a href="../GTI/InicioSesion.php">¡Inicia sesión!</a></p>
    </section>

   

    <section class="image-box">
      <img src="/img/Inicio_Registro.png" alt="Registro">
    </section>
  </main>

  <!-- Footer -->
  <?php include "../includes/footerGTI.php" ?>

<!-- Script -->
<script src="../../js/RegistroGTI.js"></script>


</body>
</html>