<?php
session_start();
require_once '../includes/MySQL.inc';

if (!isset($conn)) die();

// Validar que se reciban datos
if (!isset($_POST['email'], $_POST['password']) || empty(trim($_POST['email'])) || empty(trim($_POST['password']))) {
    $_SESSION['error'] = 'campos_vacios';
    header('Location: ./InicioSesionGTI.php');
    exit();
}

$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Preparar consulta para verificar usuario
$stmt = $conn->prepare("SELECT nombre, password FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
    // No existe usuario con ese email
    $_SESSION['error'] = 'usuario_no_encontrado';
    $stmt->close();
    header('Location: ./PROA.php');
    exit();
}

$stmt->bind_result( $nombre, $hashed_password);
$stmt->fetch();

// Verificar contraseña con SHA2 (igual que en registro)
$hash_input = hash('sha256', $password);

if ($hash_input !== $hashed_password) {
    // Contraseña incorrecta
    $_SESSION['error'] = 'contrasena_incorrecta';
    $stmt->close();
    header('Location: ./InicioSesionGTI.php');
    exit();
}

// Guardar en sesión
$_SESSION['usuario'] = [

    'nombre' => $nombre,
    'email' => $email
];
$stmt->close();

// Redirigir a landing page
header('Location: ../../index.php');
exit();