<!DOCTYPE html>
<html lang="en">
<head> <!--Encabezado-->
  <meta charset="UTF-8">
  <title>Controlador</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="css/estilos.css">
</head>

<body class="text-white">
    <?php

    //importamos las funciones
    require 'funcionesBD.php';

    //detectamos que boton se envvia
    if(isset($_POST['btnvalidar'])){

    //Guardamos en variables el contenido de los input
      $correo=$_POST['txtcorreo'];
      $contra=$_POST['txtpass'];
      //validamos el usuario
      $status= validarUsuarios($correo,$contra);

      //Decision en base al status
      if($status == 1){
          echo '<script > alert("Bienvenido a MancosAnonimos");</script>';
          header("Location: index2.php?user=".$correo);
          echo '<script > window.location="index2.php";</script>';
      }else{
          echo '<script > alert("Revise sus credenciales");</script>';
          echo '<script > window.location="index.php";</script>';
      }
    }

    //  if (isset($_POST['btnRegistrar'])) {
      //  echo '<script > window.location="FormularioRU.html";</script>';
      //}

      if(isset($_POST['guardar'])){
        $matric = $_POST['txtMatricula'];
        $carrer = "Sistemas";
        $grupo = $_POST['txtGrupo'];
        $nombre = $_POST['txtNombre'];
        $appate = $_POST['txtapPaterno'];
        $apmate = $_POST['txtapMaterno'];
        $correo = $_POST['txtCorreo'];
        $contra = $_POST['txtPass'];
        $confir = $_POST['txtConfir'];
        $status = 0;
        if ($contra===$confir){
          //proceder a guardadar
          $stat=verificarUsuario($matric);
        } else{
            //Avisar que no coinciden
            echo '<script > alert("Contraseñas no coinciden");</script>';
            echo '<script > window.location="FormularioRU.html";</script>';
          }
        if ($stat==1) {
          $status = guardarUsuario($matric,$carrer,$grupo,$nombre,$appate,$apmate,$correo,$contra);
          if($status==1){
            echo '<script > alert("Usuario Guardado en BD");</script>';
            echo '<script > window.location="FormularioRU.html";</script>';
          } else{
            echo'<script > alert("Error al intentar registrarse");</script>';
            echo '<script > window.location="FormularioRU.html";</script>';
          }
        }  else{
            echo '<script > alert("El usuario ya existe");</script>';
            echo '<script > window.location="FormularioRU.html";</script>';
          }
    }

    if(isset($_POST['btnEliminar'])){
      $idUsu=$_POST['txtID'];

      $status = eliminarU($idUsu);

      if($status==1){
        echo '<script > alert("Usuario Eliminado en BD");</script>';
        echo '<script > window.location="consultarUsuarios.php";</script>';
      }else{
        echo '<script > alert("No se eliminó el usuario");</script>';
        echo '<script > window.location="consultarUsuarios.php";</script>';
      }
    }

    if(isset($_POST['btnRegresar'])){
      echo '<script > window.location="consultarUsuarios.php";</script>';
    }

    if(isset($_POST['btnCerrar'])){
      echo "Botón cerrar sesión presionado";
      echo '<script > window.location="index.php";</script>';
    }

    if(isset($_POST['editar'])){
      $idUsu=$_POST['txtID'];
      $corr=$_POST['Txtcorreo'];
      $con=$_POST['Txtpass'];
      $perf=$_POST['Perfil'];

      $status = editarUs($corr,$con,$perf,$idUsu);

      if($status==1){
        echo '<script > alert("Usuario Actualizado en BD");</script>';
        echo '<script > window.location="consultarUsuarios.php";</script>';
    } else{
      echo '<script > alert("No se editó el usuario");</script>';
      echo '<script > window.location="consultarUsuarios.php";</script>';
    }
  }
   ?>

</body>
</html>
