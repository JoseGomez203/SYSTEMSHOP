<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consulta de usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="stylesheet" href="css/estilos.css">

  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
      <a class="navbar-brand" href="#">Mancos Anonimos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index2.html">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Usuarios
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="FormularioRU.html">Registro Usuarios </a>
              <a class="dropdown-item" href="consultarUsuarios.php">Consultar Usuarios</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Eliminar usuario</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Videojuegos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Registro videojuegos </a>
              <a class="dropdown-item" href="#">Editar videojuegos</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Eliminar videojuego</a>
            </div>
          </li>
        </ul>
        <h6 class="text-white" >Usuario </h6>
          <button class="btn btn-outline-warning" type="submit">Cerrar sesion</button>
      </div>
    </nav>

    <form action="controlador.php" method="post" class="form-register">
      <h4>Formulario Editar Usuario <h4>
      <div>
      <input name="Txtcorreo" class="controls" type="email" value="<?php echo $_REQUEST ['co']; ?>" required>
      </div>

      <div>
      <input name="Txtpass" class="controls" type="text" value="<?php echo $_REQUEST ['con']; ?>" required>
      </div>

      <div>
        <input type="hidden" name="txtID" value="<?php echo $_REQUEST ['id']; ?>" required>
      </div>

      <select name= "Perfil" required>
      <option><?php echo $_REQUEST ['per']; ?></option>
    <option>Empleado</option>
    <option>Administrador</option>
    </select>

    <button name="editar" type="submit" class"btn btn-light">Editar Usuario</button>

    </form>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
