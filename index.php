<?php
  require_once "api/db.php";
  session_start();
  if(count($_POST) > 0){
    $correo = $_POST["correo"];
    $password = $_POST["password"];
    $usuario = iniciarSesion($correo, $password);
    if($usuario !=null){
      if ($usuario->tipousuario == "c") {
        $_SESSION["usuario"] = $usuario;
        header("Location:cliente.php");
      }else {
        $_SESSION["usuario"] = $usuario;
        header("Location:administrador.php");
      }
    } else {
      $error ="Error en inicio de Sesión";

    }

  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio de Sesion</title>
  </head>
  <body>
    <div class="container pt-5">
      <?php
          if(isset($error)){ //si la variable $error existe
            ?>
            <div class="alert alert-danger">
              <?php echo $error; ?>
            </div>
            <?php
          }
       ?>
      <div class="errores">

      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">


        <form  method="POST">
          <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" class="form-control"
            name="correo" id="correo" value="">
          </div>
          <div class="form-group">
            <label for="clave">Clave</label>
            <input type="password" class="form-control"
            name="password" id="password" value="">
          </div>
          <button type="submit" class="btn btn-info"
            name="button" id="inicio_sesion">Iniciar Sesión</button>
        </form>
      </div>
    </div>


    <?php require_once "templates/scripts.php";?>
   <script type="text/javascript" src="js/main.js"></script>
 </body>
</html>
