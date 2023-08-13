<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospital Clínica Costarricense</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/seccion-usuario.css" />
</head>

<body class="bodyprincipal">
    <!-- Header -->
    <?php include "headerdos.php"; ?>

    <section>
        <div class="container mt-5 mb-5">
            <div class="card border-0">
                <section class="row justify-content-center">
                    <div class="col-md-6 col-lg-7">
                        <form>
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
                                <textarea placeholder="Asunto" class="form-control" name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                            </div>

                            <div class="form-group mt-3 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer class="bg-dark text-white">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3">
                    <img src="img/logo.png" width="300px" height="200px" alt="Logo" class="img-fluid" />
                </div>
                <div class="col-md-3">
                    <h5>Hospital Clínica Costarricense</h5>
                    <p>
                        Somos una organización sin fines de lucro donde hemos articulado y
                        estructurado una red de servicios de salud con una fuerte
                        inversión en los últimos años para fortalecer nuestros programas
                        sociales. Tenemos algo más que nos mueve, y es nuestro Propósito
                        Transformador Masivo: "Salvar vidas y cuidar la humanidad"
                    </p>
                </div>
                <div class="col-md-3">
                    <h5>Sedes</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Sede San José</a></li>
                        <li><a href="#">Sede Libera</a></li>
                        <li><a href="#">Sede San Carlos</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Contáctenos</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#"><i class="bi bi-facebook"></i> Facebook</a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-twitter"></i> Teléfono</a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-instagram"></i> Whatsapp</a>
                        </li>
                        <li>
                            <a href="#"><i class="bi bi-instagram"></i> Correo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
</body>

</html>