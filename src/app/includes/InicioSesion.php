<?php
session_start();  // Inicia la sesión al comienzo del archivo

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["usuario"], $_POST["contraseña"])) {
    $identificador = $_POST["usuario"]; // Puede ser nombre de usuario o correo
    $clave = $_POST["contraseña"];

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

        if (($coincideUsuario || $coincideCorreo)) {
            if (password_verify($clave, $u["contraseña"])) {
                $_SESSION["usuario"] = $u["usuario"];
                $usuario_encontrado = true;
                break;
            }
        }
    }


    if ($usuario_encontrado) {
        // Redirigir al usuario a la landing page después de un inicio de sesión exitoso
        header("Location: ../../index.php");  // Cambia esto por la ruta correcta de tu landing page
        exit;  // Terminar la ejecución del script después de la redirección
    } else {
        echo "<p>Usuario o contraseña incorrectos.</p>";
        echo $identificador;
        echo $clave;
    }
} else {
    echo "<p>Acceso no permitido</p>";
}
?>