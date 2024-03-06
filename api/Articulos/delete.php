<?php
  require_once "../db.php";

  $idarticulo = $_POST["idarticulo"];

  $sql = "DELETE FROM articulos WHERE idarticulo=$idarticulo";

  query($sql);

  $respuesta = new stdClass();
  $respuesta->resultado = true;
  echo json_encode($respuesta);
