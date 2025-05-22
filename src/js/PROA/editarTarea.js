function guardarCambios() {
    const titulo = document.getElementById("titulo").value.trim();
    const fecha = document.getElementById("fecha").value;
    const reenvios = document.getElementById("reenvios").value;
    const descripcion = document.getElementById("descripcion").value.trim();
    const instrucciones = document.getElementById("instrucciones").value.trim();
    const mensaje = document.getElementById("mensaje");

    if (!titulo || !fecha || !reenvios || !descripcion || !instrucciones) {
        mensaje.textContent = "Todos los campos son obligatorios.";
        mensaje.className = "alert error";
        return;
    }

    mensaje.textContent = "Cambios guardados exitosamente.";
    mensaje.className = "alert success";

}