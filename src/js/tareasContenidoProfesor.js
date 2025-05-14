    function guardarCalificacion() {
    const nota = document.getElementById('nota').value;
    const mensaje = document.getElementById('mensaje');

    if (nota === "" || isNaN(nota) || nota < 0 || nota > 10) {
    mensaje.textContent = " La tarea no se puede puntuar.";
    mensaje.className = "mensaje error";
} else {
    mensaje.textContent = " Tarea puntuada correctamente.";
    mensaje.className = "mensaje ok";
}
}
