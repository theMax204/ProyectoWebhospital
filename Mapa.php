<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Contactenos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="theme-color" content="#fafafa">
    <link rel="stylesheet" href="css/generalh.css">
    <link rel="stylesheet" href="css/Mapa.css">
</head>

<body class="bodyprincipal">
    <!--  cabecera -->
    <?php
  $currentPage = basename($_SERVER['PHP_SELF']);
  include "headerdos.php";
  ?>

    <div class="container text-center my-5">
        <h2>Sedes Disponibles</h2>
    </div>

    <main class="container">
        <div class="card basemapa">
            <div class="row">
                <div class="col-md-4">
                    <div class="imagensedemapa clickable" data-bs-toggle="collapse" href="#mapa1">
                        <div class="imagen-container">
                            <img src="img/Sede.png" class="imgmapa" alt="...">
                            <div class="horario">
                                <h3 class="titulossedes">Sede Quepos</h3>
                                <h3 class="titulossedesecu">Horario de atencion:</h3>
                                <p class="titulossedes">Lunes a Viernes: 8:00am a 6:00pm.</p>
                                <p class="titulossedes">Sábados: 9:00am a 12:00pm.</p>
                                <p class="titulossedes">Domingo: Cerrado.</p>
                                <h3 class="titulossedesecu">Horario de Farmacia:</h3>
                                <p class="titulossedes">Lunes a Viernes: 8:00am a 6:00pm.</p>
                                <p class="titulossedes">Sábados: 9:00am a 12:00pm.</p>
                                <h3 class="titulossedesecu">Teléfonos:</h3>
                                <p class="titulossedesphone">+506 4070 4040</p>
                                <p class="titulossedesphone">Medicina General: ext. 9850</p>
                                <p class="titulossedesphone">Especialidades Medicas: ext. 9854</p>
                            </div>
                        </div>
                        <div id="mapa1" class="collapse">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d62880.267555375074!2d-84.046966!3d9.932565!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e38f342558c3%3A0x1a16a98811103a23!2sDr.%20Vape!5e0!3m2!1sen!2scr!4v1685941308477!5m2!1sen!2scr"
                                width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Agregar bloques similares para otras sedes -->
    </main>

    <!--pie-->
    <?php include "footer.php" ?>
    <!--pie-->

    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <!-- archivos extra de js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="js/principal.js"></script>

</body>

</html>