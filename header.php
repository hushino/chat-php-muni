<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Municipalidad de Clorinda - Direccion de Transito</title>
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <script src="public/js/jquery-3.5.1.min.js"></script>
  <script src="public/js/bootstrap.bundle.min.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Filiacion del conductor</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/index.php">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/nuevo.php">Ingresar Nuevo</a>
      </li>
    </ul>
    <form method="post" action="buscar.php" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="buscar" type="buscar" placeholder="Buscar Titular, Licencia" aria-label="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>