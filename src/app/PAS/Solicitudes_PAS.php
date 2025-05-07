<!----------------------------------------------------------------------------------------------------------->
<?php
include "../includes/funciones_inicio_PAS.php";
include "../includes/datos_usuario.php";

if ($thisUser->rol != "PAS") {
    echo "Acceso denegado. No tienes permisos para ver esta página.";
    exit();
}
?>
<!----------------------------------------------------------------------------------------------------------->
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PROA</title>
    <link rel="preload" href="../../css/solicitudesPAS.css" as="style" />
    <link rel="stylesheet" href="../../css/solicitudesPAS.css">
    <link rel="stylesheet" href="../../css/header_footer.css">
</head>
<!----------------------------------------------------------------------------------------------------------->
<body>
    <!-- encabezado-->
    <?php include "../includes/header_proa.php" ?>
    <!-- fin del encabezado-->
<!----------------------------------------------------------------------------------------------------------->



    <!-- aqui comienza la bandeja de solicitudes-->
    <section class="contenido">
        <h1>Solicitudes</h1>
        <!--botones primarios-->
        <ul class="bandeja_columna1">
            <li><button onclick="mostrarContenido('de_entrada')">Bandeja de entrada</button></li>
            <li><button onclick="mostrarContenido('hechas')">Solicitudes Hechas</button></li>
            <li><button onclick="mostrarContenido('rechazadas')">Papelera</button></li>
        </ul>
        <!--fin de botones primarios-->




        <!--botones secundarios-->
        <div class="columna_2">
            <!--bandeja de entrada-->
            <ol class="bandeja" id="de_entrada">
                <li id="1"><button>
                        <p>Lorem ipsum movedae tiresio</p>
                        <img src="https://placehold.co/30x30" alt="aceptada?">
                    </button></li>
                <li id="2"><button>
                        <p>Lorem ipsum movedae tiresio</p>
                        <img src="https://placehold.co/30x30" alt="aceptada?">
                    </button></li>
                <li id="3"><button>
                        <p>Lorem ipsum movedae tiresio</p>
                        <img src="https://placehold.co/30x30" alt="aceptada?">
                    </button></li>
                <li id="4"><button>
                        <p>Lorem ipsum movedae tiresio</p>
                        <img src="https://placehold.co/30x30" alt="aceptada?">
                    </button></li>
                <li id="5"><button>
                        <p>Lorem ipsum movedae tiresio</p>
                        <img src="https://placehold.co/30x30" alt="aceptada?">
                    </button></li>
                <li id="6"><button>
                        <p>Lorem ipsum movedae tiresio</p>
                        <img src="https://placehold.co/30x30" alt="aceptada?">
                    </button></li>
            </ol>


            <!--bandeja de hechas-->
            <ol class="bandeja" id="hechas">
                <li id="7"><button>
                        <p>Lorem ipsum movedae tiresio</p>
                    </button></li>
                <li id="8"><button>
                        <p>Lorem ipsum movedae tiresio</p>
                    </button></li>
            </ol>


            <!--bandeja de rechazadas-->
            <ol class="bandeja" id="rechazadas">
                <li id="9"><button>
                        <p>Lorem ipsum movedae tiresio</p>
                    </button></li>
                <li id="10"><button>
                        <p>Lorem ipsum movedae tiresio</p>
                    </button></li>
            </ol>
        </div>
        <!--fin de botones secundarios-->





        <!--vista del contenido-->
        <div class="solicitudes_vista_del_contenido">


            <!--sin contenido seleccionado-->
            <ul id="sin_contenido">
                <li><img src="https://placehold.co/100x100" alt="icono sin solicitudes"></li>
                <li><p>No hay solicitudes que atender</p></li>
            </ul>

            <!--contenido de solicitudes pendientes-->
            <ul id="contenido_1">
                <img src="https://placehold.co/50x50" alt="user">
                <li>nombre y apellido</li>
                <li>rol</li>
                <li>DNI</li>
                <li>asunto</li>
                <li>tema</li>
                <li>descripcion</li>
                <ul>
                    <li><button>aceptada</button></li>
                    <li><button>rechazada</button></li>
                </ul>
            </ul>
            <ul id="contenido_2">
                <img src="https://placehold.co/50x50" alt="user">
                <li>nombre y apellido</li>
                <li>rol</li>
                <li>DNI</li>
                <li>asunto</li>
                <li>tema</li>
                <li>descripcion</li>
                <ul>
                    <li><button>aceptada</button></li>
                    <li><button>rechazada</button></li>
                </ul>
            </ul>
            <ul id="contenido_3">
                <img src="https://placehold.co/50x50" alt="user">
                <li>nombre y apellido</li>
                <li>rol</li>
                <li>DNI</li>
                <li>asunto</li>
                <li>tema</li>
                <li>descripcion</li>
                <ul>
                    <li><button>aceptada</button></li>
                    <li><button>rechazada</button></li>
                </ul>
            </ul>
            <ul id="contenido_4">
                <img src="https://placehold.co/50x50" alt="user">
                <li>nombre y apellido</li>
                <li>rol</li>
                <li>DNI</li>
                <li>asunto</li>
                <li>tema</li>
                <li>descripcion</li>
                <ul>
                    <li><button>aceptada</button></li>
                    <li><button>rechazada</button></li>
                </ul>
            </ul>
            <ul id="contenido_5">
                <img src="https://placehold.co/50x50" alt="user">
                <li>nombre y apellido</li>
                <li>rol</li>
                <li>DNI</li>
                <li>asunto</li>
                <li>tema</li>
                <li>descripcion</li>
                <ul>
                    <li><button>aceptada</button></li>
                    <li><button>rechazada</button></li>
                </ul>
            </ul>
            <ul id="contenido_6">
                <img src="https://placehold.co/50x50" alt="user">
                <li>nombre y apellido</li>
                <li>rol</li>
                <li>DNI</li>
                <li>asunto</li>
                <li>tema</li>
                <li>descripcion</li>
                <ul>
                    <li><button>aceptada</button></li>
                    <li><button>rechazada</button></li>
                </ul>
            </ul>

        </div>

        <!--fin de vista de contenido-->
    </section>





    <!----------------------------------------------------------------------------------------------------------->
    <!-- footer-->
    <?php include "../includes/footer_proa.php" ?>
    <!-- fin del footer-->

    <script src="../../js/solicitudes_PAS.js"></script>
</body>
<!----------------------------------------------------------------------------------------------------------->
</html>
<!----------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->
