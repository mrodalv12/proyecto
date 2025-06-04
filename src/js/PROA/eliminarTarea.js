document.getElementById("btnEliminar").addEventListener("click", function () {
    Swal.fire({
        title: '¿Desea eliminar la tarea?',
        text: "Esta acción no se puede deshacer.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#76AE77',
        cancelButtonColor: '#D07F8B',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        backdrop: true,
        allowOutsideClick: false,
        allowEscapeKey: true
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById("formEliminar").submit();
        }
    });
});