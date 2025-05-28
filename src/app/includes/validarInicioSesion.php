<?php
session_start();
require_once '../includes/MySQL.inc';

if (!isset($conn)) die('Error de conexión a la base de datos.');

// Validar que se reciban todos los datos del formulario
if (
    !isset($_POST['correo'], $_POST['contraseña']) ||
    empty(trim($_POST['correo'])) ||
    empty(trim($_POST['contraseña']))
) {
    $_SESSION['error'] = 'campos_vacios';
    header('Location: ../../InicioSesionProa.php');
    exit();
}

$correo = trim($_POST['correo']);
$password = trim($_POST['contraseña']);

// Consulta todos los datos del usuario por correo
$stmt = $conn->prepare("SELECT * FROM usuarios_proa WHERE Correo = ?");
$stmt->bind_param("s", $correo);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    $_SESSION['error'] = 'usuario_no_encontrado';
    $stmt->close();
    header('Location: ../../InicioSesionProa.php');
    exit();
}

$usuario = $result->fetch_assoc();

// Comparar el hash de la contraseña introducida con el almacenado
$hash_input = hash('sha256', $password);

if ($hash_input !== $usuario['Contraseña']) {
    $_SESSION['error'] = 'contrasena_incorrecta';
    $stmt->close();
    header('Location: ../../InicioSesionProa.php');
    exit();
}

// Autenticación correcta: guardar todos los datos del usuario en la sesión
$_SESSION['usuario_proa'] = $usuario;

$stmt->close();

// Redirección tras login exitoso
if ($usuario['Rol'] === 'Profesor') {
    header('Location: ../Profesor_Alumno/Inicio_Profesor.php');
} else {
    header('Location: ../Profesor_Alumno/Inicio_Alumno.php');
}
exit();
?>
