<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hospital Clínica Costarricense</title>
  <link rel="icon" type="image/x-icon" href="img/logo.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/seccion-usuario.css" />
</head>

<body>
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="150" height="70" alt="" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Mapa.php">Mapa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Citas en linea.php">Citas en línea</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/registros.php">Registrarse</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2300">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Imagenhospital1.jpg" class="imgcarusel" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Imagenhospital2.jpg" class="imgcarusel" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Imagenhospital3.jpg" class="imgcarusel" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Imagenhospital4.jpg" class="imgcarusel" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container mt-4">
      <div class="card titulomain-card">
        <div class="card-body">
          <h2 class="tituloprincipal">Encuentre aquí el especialista de su preferencia</h2>
          <p class="tituloservicios">Todos los servicios disponibles</p>
          <form class="d-flex" role="search" onsubmit="submitForm(event)">
            <input id="buscador" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </header>
</body>

</html>