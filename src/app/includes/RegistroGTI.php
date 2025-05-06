<?php
// Solo procesar si se recibe el formulario por GET
if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["usuario"], $_GET["correo"], $_GET["contraseña"])) {
    // Recoger datos del formulario
    $usuario = $_GET["usuario"];
    $correo = $_GET["correo"];
    $contraseña = $_GET["contraseña"];
    $confirmarContraseña = $_GET["confirmarContraseña"];

    // Comprobar si las contraseñas coinciden
    if ($contraseña !== $confirmarContraseña) {
        echo "<p>Las contraseñas no coinciden. Intenta de nuevo.</p>";
        exit;
    }

    // Encriptar la contraseña
    $contraseña = password_hash($contraseña, PASSWORD_DEFAULT);

    // Nuevo usuario en formato array (con datos base)
    $nuevo_usuario = [
        "usuario" => $usuario,
        "correo" => $correo,
        "contraseña" => $contraseña
    ];

    // Cargar usuarios predefinidos desde el archivo JSON
    $archivoUsuarios = 'usuarioProa.json';
    if (file_exists($archivoUsuarios)) {
        $usuarios_predefinidos = json_decode(file_get_contents($archivoUsuarios), true);
    } else {
        echo "<p>Error: No se encuentra el archivo de usuarios predefinidos.</p>";
        exit;
    }

    // Asegurarse de que los arrays de 'alumno', 'profesor' y 'pas' existan
    if (!isset($usuarios_predefinidos['alumno']) || !is_array($usuarios_predefinidos['alumno']) ||
        !isset($usuarios_predefinidos['profesor']) || !is_array($usuarios_predefinidos['profesor']) ||
        !isset($usuarios_predefinidos['pas']) || !is_array($usuarios_predefinidos['pas'])) {
        echo "<p>Error: Los usuarios predefinidos no están definidos correctamente.</p>";
        exit;
    }

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
            echo "<p>El nombre de usuario ya está registrado.</p>";
            exit;
        }
    }

    // Función para obtener un usuario aleatorio de un array
    function obtenerUsuarioAleatorio($usuarios) {
        return $usuarios[array_rand($usuarios)];
    }

    // Asignar un alumno, un profesor y un pas aleatorio
    $alumno = obtenerUsuarioAleatorio($usuarios_predefinidos['alumno']);
    $profesor = obtenerUsuarioAleatorio($usuarios_predefinidos['profesor']);
    $pas = obtenerUsuarioAleatorio($usuarios_predefinidos['pas']);

    // Crear registros para el nuevo usuario con los roles correspondientes
    $usuarios[] = array_merge($nuevo_usuario, $alumno); // Asigna un alumno
    $usuarios[] = array_merge($nuevo_usuario, $profesor); // Asigna un profesor
    $usuarios[] = array_merge($nuevo_usuario, $pas); // Asigna un pas

    // Guardar la lista actualizada de usuarios en el archivo JSON
    file_put_contents($archivo, json_encode($usuarios, JSON_PRETTY_PRINT));

    // Confirmación y redirección
    header("Location: ../GTI/InicioSesion.php");
    exit; // Asegura que no se siga ejecutando el código después de la redirección
}
?>