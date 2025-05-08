function mostrarContenido(id) {
    document.querySelectorAll('[id^="solicitud_"]').forEach(solicitud => {
        solicitud.classList.remove('activo');
    });
    let hayElementos = false;

    const elementos = document.querySelectorAll(`[id^="${id}"]`);
    elementos.forEach(elemento => {
        elemento.classList.add('activo');
        hayElementos = true;
        console.log("Activado: ", elemento.id);
    });
    const mensajeVacio = document.getElementById("bandeja_vacia");
    if (mensajeVacio) {
        mensajeVacio.style.display = hayElementos ? "none" : "block";
    }
}
//---------------------------------------------------------------------------------
function activarEstilo(elemento) {
    // Quitar la clase 'activo' de todos los enlaces
    document.querySelectorAll('.bandeja_columna1 a').forEach(a => {
        a.classList.remove('activo');
    });
    // Agregar clase al que fue clickeado
    elemento.classList.add('activo');
}
