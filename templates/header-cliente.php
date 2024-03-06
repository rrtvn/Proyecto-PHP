<?php
  session_start();
  if (!isset($_SESSION["usuario"])) {
    header("Location: cliente.php");
    exit();
  }
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Proyecto</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="#"><span>Tienda</span></a>
          </div>
          <div  id="navbar">
            <ul class="nav navbar">

              <li>
                <a href="fin_sesion.php"><span>Cerrar Session</span></a>
              </li>
            </ul>
          </div>
      </div>
    </nav>
    </header>
