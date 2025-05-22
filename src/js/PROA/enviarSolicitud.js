function enviarSolicitud() {
    const asunto = document.getElementById("asunto").value;
    const tema = document.getElementById("tema").value;
    const descripcion = document.getElementById("descripción").value;
    const mensaje = document.getElementById("mensaje");

    if (!asunto || !tema || !descripcion) {
        mensaje.textContent = "Por favor, completa todos los campos.";
        mensaje.className = "mensaje error"; // ← Esto aplica el color rojo desde CSS
        return;
    }

    mensaje.textContent = `Solicitud enviada con éxito.`;
    mensaje.className = "mensaje exito"; // ← Esto aplica el color verde desde CSS
}