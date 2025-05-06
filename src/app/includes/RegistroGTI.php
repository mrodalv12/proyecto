<?php
// Solo procesar si se recibe el formulario por GET
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["usuario"], $_GET["correo"], $_GET["contraseña"])) {
    // Recoger datos del formulario
    $usuario = $_GET["usuario"];
    $correo = $_GET["correo"];
    $contraseña = password_hash($_GET["contraseña"], PASSWORD_DEFAULT); // Encriptar
    
    // Nuevo usuario en formato array
    $nuevo_usuario = [
        "usuario" => $usuario,
        "correo" => $correo,
        "contraseña" => $contraseña
    ];

    // Leer usuarios existentes o crear array vacío
    $archivo = "usuarios.json";
    $usuarios = file_exists($archivo) ? json_decode(file_get_contents($archivo), true) : [];

    // Verifica si json_decode devuelve null (por si el JSON está mal formado)
    if ($usuarios === null) {
        $usuarios = [];  // Si es null, inicializa como un array vacío
    }

    // Verificar si el usuario ya existe
    foreach ($usuarios as $u) {
        if ($u["usuario"] === $usuario) {
            echo "<p> El nombre de usuario ya está registrado.</p>";
            exit;
        }
    }

    // Agregar nuevo usuario al array
    $usuarios[] = $nuevo_usuario;

    // Guardar en el archivo JSON
    file_put_contents($archivo, json_encode($usuarios, JSON_PRETTY_PRINT));

    // Confirmación
    // Redirigir después de 2 segundos
    header("Location: ../GTI/InicioSesion.php");
    exit;
}
?>