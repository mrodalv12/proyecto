


function mostrarContenido(id) {
    document.querySelectorAll('[id^="solicitud_"]').forEach(solicitud => {
        solicitud.classList.remove('activo');
        solicitud.classList.remove('activo2');
        document.getElementById("sin_contenido_desplegado").style.display = "block";
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
function mostrarContenido2(id) {
    document.querySelectorAll('[id^="solicitud_desplegada_"]').forEach(solicitud => {
        solicitud.classList.remove('activo2');
    });
    const elemento = document.querySelectorAll(`[id^="solicitud_desplegada_${id}"]`);
    const mensajeVaciodesplegado = document.getElementById("sin_contenido_desplegado");

    if (elemento.length > 0) {
        elemento.forEach(el => {
            el.classList.add('activo2');
        });
        if (mensajeVaciodesplegado) mensajeVaciodesplegado.style.display = "none";
    } else {
        if (mensajeVaciodesplegado) mensajeVaciodesplegado.style.display = "block";
    }
}
//---------------------------------------------------------------------------------
function activarEstilo(elemento) {
    // Quitar la clase 'activo' de todos los enlaces
    document.querySelectorAll('.bandeja_columna1 a').forEach(a => {
        a.classList.remove('activo');
    });
    document.querySelectorAll('.columna_2 .bandeja a').forEach(a => {
        a.classList.remove('color');
    });
    // Agregar clase al que fue clickeado
    elemento.classList.add('activo');
}
//---------------------------------------------------------------------------------
function activarEstilo2(elemento) {
    // Quitar la clase 'activo' de todos los enlaces
    document.querySelectorAll('.columna_2 .bandeja a').forEach(a => {
        a.classList.remove('color');
    });
    // Agregar clase al que fue clickeado
    elemento.classList.add('color');
}
//---------------------------------------------------------------------------------
