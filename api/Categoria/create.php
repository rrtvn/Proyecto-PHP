<?php

  require_once "../db.php";
  //Arreglos super globales
  //$_GET["id"] // arreglos asociativos
  //$_GET, $_POST, $_REQUEST = $_GET + $_POST
  //$_FILES ["foto_verano"]     input type ="file" name="foto_verano"
  //$_SESSION["nombre"] = "Michel";

  $idcategoria = $_POST["idcategoria"]; //INSEGURO, PUEDE SER VICTIMA DE SQL INJECTION
  $categoria = $_POST["categoria"];
  $detalle = $_POST["detalle"];

  $sql = "INSERT INTO categoria (idcategoria,categoria,detalle)"
        ." VALUES('$idcategoria','$categoria','$detalle')";

  query($sql);
  $respuesta = new stdClass();
  $respuesta->resultado = true;
  echo json_encode($respuesta);
