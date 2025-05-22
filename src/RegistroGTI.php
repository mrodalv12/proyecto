<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
    <link rel="preload" href="css/Footer_Header_Noregistrado.css" as="style" />
    <link rel="stylesheet" href="css/Footer_Header_Noregistrado.css" />
  <link rel="stylesheet" href="css/RegistroGTI.css">
</head>
<body>

<!-- Header -->
<?php include "app/includes/headerGTI.php" ?>


  <main class="main-container">
      <!-- Formulario registro -->
    <section class="form-box">
      <h2>Crea una cuenta</h2>
      <form id="registroForm" action="app/includes/registro.php" method="POST">
        <label for="nombre">Nombre de usuario</label>

          <!-- El atributo name es lo que se envía al servidor, si no hay, no se envía nada, aunque tenga id -->
          <!-- Introduce el usuario -->
        <input type="text" id= "nombre" name="nombre" placeholder="Introduce tu nombre de usuario" >

        <label for="email">Correo electrónico</label>
          <!-- Introduce el email -->
        <input type="email" id="email" name="email" placeholder="Introduce tu correo electrónico" >

        <label for="password">Contraseña</label>
          <!-- Introduce la contraseña -->
        <input type="password" id="password" name="password" placeholder="Introduce una contraseña" >

          <label for="confirmarContraseña">Confirmar Contraseña</label>
          <!-- Vuelve a introducir la contraseña -->
          <input type="password" id="confirmarContraseña" name="confirmarContraseña" placeholder="Vuelve a introducir la contraseña" >



        <button type="submit" name="registro">Crear cuenta</button>

          <?php include 'app/includes/mensajeError.php'; ?>
      </form>

        <!-- Enlace para ir al login -->
      <p class="login-link">¿Ya tienes una cuenta? <a href="InicioSesionGTI.php">¡Inicia sesión!</a></p>
    </section>

   

    <section class="image-box">
      <img src="/img/Inicio_Registro.png" alt="Registro">
    </section>
  </main>

  <!-- Footer -->
  <?php include "app/includes/footerGTI.php" ?>


</body>
</html>