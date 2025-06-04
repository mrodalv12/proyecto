const botonesEliminar = document.querySelectorAll(".btnEliminar");
const formulariosEliminar = document.querySelectorAll(".formEliminar");


botonesEliminar.forEach((boton, index) => {
    boton.addEventListener("click", () => {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "Esta acción no se puede deshacer.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#76AE77',
            cancelButtonColor: '#D07F8B',
            confirmButtonText: 'Sí, eliminar'
        }).then((result) => {
            if (result.isConfirmed) {
                formulariosEliminar[index].submit();
            }
        });
    });
});

