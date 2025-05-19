// Añade una nueva fila a la tabla de unidades
function añadirFila() {
    const tabla = document.querySelector("#tabla-unidades tbody");
    const nuevaFila = document.createElement("tr");
    nuevaFila.innerHTML = `
        <td><input type="text" placeholder="Nombre de la unidad"></td>
        <td><input type="text" placeholder="Horas teoría"></td>
        <td><input type="text" placeholder="Horas práctica"></td>
        <td><button type="button" onclick="eliminarFila(this)">Eliminar</button></td>
    `;
    tabla.appendChild(nuevaFila);
}

// Elimina una fila
function eliminarFila(boton) {
    const fila = boton.closest("tr");
    fila.remove();
}

// Botones de la bibliografía para indicar si está o no en la biblioteca
function toggleBiblioteca(boton) {
    boton.classList.toggle("en-biblioteca");

    if (boton.classList.contains("en-biblioteca")) {
        boton.textContent = "Está en biblioteca";
    } else {
        boton.textContent = "No está en biblioteca";
    }
}

// Para añadir y eliminar libros de la bibliografía
function añadirLibro(tipo) {
    const contenedor = tipo === 'obligatoria' ? document.getElementById("lista-obligatoria") : document.getElementById("lista-adicional");

    const divLibro = document.createElement("div");
    divLibro.className = "libro";

    const input = document.createElement("input");
    input.type = "text";
    input.placeholder = "Título del libro...";

    const botonBiblioteca = document.createElement("button");
    botonBiblioteca.className = "boton-biblioteca";
    botonBiblioteca.textContent = "No está en biblioteca";
    botonBiblioteca.onclick = () => toggleBiblioteca(botonBiblioteca);

    const botonEliminar = document.createElement("button");
    botonEliminar.className = "boton-eliminar";
    botonEliminar.textContent = "Borrar";
    botonEliminar.title = "Eliminar libro";
    botonEliminar.onclick = () => contenedor.removeChild(divLibro);

    divLibro.appendChild(input);
    divLibro.appendChild(botonBiblioteca);
    divLibro.appendChild(botonEliminar);
    contenedor.appendChild(divLibro);
}

// Mensaje de guardado con éxito o error + navegación
document.addEventListener("DOMContentLoaded", () => {
    const botonGuardar = document.getElementById("guardar");
    const botonCancelar = document.getElementById("cancelar");
    const mensajeDiv = document.getElementById("mensaje");

    function mostrarMensaje(texto, tipo = "exito") {
        mensajeDiv.textContent = texto;
        mensajeDiv.className = `mensaje ${tipo} visible`;

        setTimeout(() => {
            mensajeDiv.classList.remove("visible");
            mensajeDiv.classList.add("oculto");

            if (tipo === "exito") {
                window.location.href = "guiaDocenteprofesor.php";
            }
        }, 2000);
    }

    botonGuardar.addEventListener("click", () => {
        mostrarMensaje("Cambios guardados correctamente", "exito");
    });

    botonCancelar.addEventListener("click", () => {
        window.location.href = "guiaDocenteprofesor.php";
    });
});