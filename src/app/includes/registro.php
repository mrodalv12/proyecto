<?php
require_once '../includes/MySQL.inc';
session_start();

if (!isset($conn)) die();

// Asegúrate de que los campos estén definidos y no estén vacíos
if (
    !isset($_POST['nombre'], $_POST['email'], $_POST['password'], $_POST['confirmarContraseña']) ||
    empty(trim($_POST['nombre'])) ||
    empty(trim($_POST['email'])) ||
    empty(trim($_POST['password'])) ||
    empty(trim($_POST['confirmarContraseña']))
) {
    $_SESSION['error'] = "campos_vacios";
    header("Location: ./registro.php");
    exit();
}

// Comprobar que las contraseñas coinciden
if ($_POST['password'] !== $_POST['confirmarContraseña']) {
    $_SESSION['error'] = "contrasenas_diferentes";
    header("Location: ./registro.php");
    exit();
}

// Verificar si el email ya existe
$email = trim($_POST['email']);
$stmt = $conn->prepare("SELECT id_cliente FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->close();
    $_SESSION['error'] = "email_registrado";
    header("Location: ./registro.php");
    exit();
}
$stmt->close();

// Insertar nuevo usuario
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, SHA2(?, 256))");
$stmt->bind_param("sss", $_POST['nombre'], $_POST['email'], $_POST['password']);
$stmt->execute();



header("Location: ./InicioSesionGTI.php?registro=ok");
exit();
?>