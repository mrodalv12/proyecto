<?php
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["usuario"], $_GET["contraseña"])) {
    $identificador = $_GET["usuario"]; // Puede ser nombre de usuario o correo
    $clave = $_GET["contraseña"];

    // Leer usuarios del archivo JSON
    $archivo = "usuarios.json";
    if (!file_exists($archivo)) {
        echo "<p>No hay usuarios registrados.</p>";
        exit;
    }

    $datos_json = file_get_contents($archivo);
    $usuarios = json_decode($datos_json, true);

    $usuario_encontrado = false;

    foreach ($usuarios as $u) {
        $coincideUsuario = $u["usuario"] === $identificador;
        $coincideCorreo = $u["correo"] === $identificador;

        if (($coincideUsuario || $coincideCorreo) && password_verify($clave, $u["contraseña"])) {
            $usuario_encontrado = true;
            break;
        }
    }

    if ($usuario_encontrado) {
        echo "<h2>Inicio de sesión exitoso</h2>";
        // Aquí podrías redirigir o iniciar una sesión si lo necesitaras
    } else {
        echo "<p>Usuario o contraseña incorrectos.</p>";
    }
} else {
    echo "<p>Acceso no permitido</p>";
}
?>