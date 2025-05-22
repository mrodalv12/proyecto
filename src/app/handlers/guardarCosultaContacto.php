<?php

use PHPMailer\PHPMailer\PHPMailer;
require_once '../includes/PHPMailer.php';
require_once '../includes/SMTP.php';

// Conexión a la base de datos
$host = "localhost";       // Cambia si tu host es diferente
$usuario = "root";         // Cambia según tu usuario de base de datos
$contrasena = "";          // Cambia según tu contraseña
$base_datos = "test";  // Reemplaza con el nombre real de tu BD

$conn = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener y limpiar datos del formulario
$correo = isset($_POST["correo"]) ? trim($_POST["correo"]) : "";
$asunto = isset($_POST["asunto"]) ? trim($_POST["asunto"]) : "";
$mensaje = isset($_POST["mensaje"]) ? trim($_POST["mensaje"]) : "";

// Validación básica
if (!filter_var($correo, FILTER_VALIDATE_EMAIL) || empty($asunto) || empty($mensaje)) {
    http_response_code(400);
    echo "Datos inválidos.";
    exit;
}

// Preparar consulta segura
$stmt = $conn->prepare("INSERT INTO contacto (Correo, Asunto, Descripción) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $correo, $asunto, $mensaje);

// Ejecutar y verificar
if (empty($correo) || empty($asunto) || empty($mensaje)) {
    $_SESSION['error'] = 'campos_vacios';
    header("Location: ../../index.php");
    exit;
}

if ($stmt->execute()) {
    echo "OK";
} else {
    http_response_code(500);
    echo "Error al guardar en la base de datos.";
}

$stmt->close();
$conn->close();

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.ethereal.email';
$mail->SMTPAuth = true;
$mail->Username = 'janick.bartell@ethereal.email';
$mail->Password = 'FddS5AwPKr6GMnYR8p';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom($correo, 'Consulta GTI');

$mail->addAddress('consulta@gti.com');

$mail->Subject = 'Consulta GTI ';

$mail->msgHTML("
        Nueva consulta realizada por: $correo <br><br>
        <b>Asunto:</b> $asunto<br>
        <b>Mensaje:</b><br>$mensaje<br><br>");

$mail->AltBody = "Asunto: $asunto\nMensaje:\n$mensaje";

$mail->send();
?>