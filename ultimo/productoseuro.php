<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.ss">

</head>
<style>
    .col-md-4 {
        padding-top: 80px;
        width: 300px;
        height: 300px;
      }
      
</style>

  <body>
    <nav  class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Mi sitio web</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" href="index.html">Inicio</a>
              <a class="nav-link" href="#">Recetas</a>
              <a class="nav-link" href="agregar3.php">agregar alimentos</a>
            </div>
           
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="sesion.html">Iniciar sesión</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro.html">Registrarse</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <center>
        <h1 style="margin-top: 110px;">COMPRA ALIMENTOS</h1>

    </center>  

    <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card">
            <img src="img/euro.jpg" class="card-img-top" alt="Imagen de una montaña">
            <div class="card-body">
              <h5 class="card-title">Título de la tarjeta</h5>
              <p class="card-text">Texto de la tarjeta</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="img/eu.jpg" class="card-img-top" alt="Imagen de una ciudad">
            <div class="card-body">
              <h5 class="card-title">Título de la tarjeta</h5>
              <p class="card-text">Texto de la tarjeta</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="img/empa.jpg" class="card-img-top" alt="Imagen de una playa">
            <div class="card-body">
              <h5 class="card-title">Título de la tarjeta</h5>
              <p class="card-text">Texto de la tarjeta</p>
            </div>
          </div>
        </div>
      </div>
      
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>