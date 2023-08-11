<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Título de tu página</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/generalh.css">
    <link rel="stylesheet" href="css/Citas en linea.css">
</head>

<body class="bodyprincipal">
    <!-- Header -->
    <?php include "headerdos.php"; ?>

    <!-- Content -->
    <div class="container mt-5">
        <div class="card cardcitas">
            <section class="row justify-content-center">
                <div class="col-md-6 col-lg-7">
                    <form class="textomodificado">
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                                    <label for="nombre">Nombre</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="apellido" placeholder="Apellidos">
                                    <label for="apellido">Apellidos</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="celuda" placeholder="Cedula">
                                    <label for="celuda">Cedula</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="telefono" placeholder="Telefono">
                                    <label for="telefono">Telefono</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                            <label for="email">Email</label>
                        </div>

                        <div class="col mt-4">
                            <div class="form-floating">
                                <select class="form-select" aria-label="Servicio deseado">
                                    <option value="" disabled selected>Servicio deseado:</option>
                                    <!-- Opciones del select -->
                                </select>
                                <label for="servicio">Servicio deseado</label>
                            </div>
                        </div>

                        <div class="col mt-4">
                            <div class="form-floating">
                                <select class="form-select" aria-label="Sede de preferencia">
                                    <option value="" disabled selected>Seleccione la sede de preferencia:</option>
                                    <!-- Opciones del select -->
                                </select>
                                <label for="sede">Sede de preferencia</label>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <textarea placeholder="Asunto" class="form-control" name="mensaje" id="mensaje" cols="30"
                                rows="10"></textarea>
                        </div>

                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <!-- Footer -->
    <?php include "footer.php"; ?>

    <!-- Scripts -->
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/97cef9f55a.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/principal.js"></script>
</body>

</html>