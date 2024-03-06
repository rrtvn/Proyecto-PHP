<?php

  require_once "../db.php";

  $idarticulo = $_POST["idarticulo"];
  $nombre = $_POST["nombre"];
  $descripcion = $_POST["descripcion"];
  $precio = $_POST["precio"];
  $stock = $_POST["stock"];
  $stockminimo = $_POST["stockminimo"];
  $idcategoria = $_POST["idcategoria"];



  $sql = "INSERT INTO articulos (idarticulo,nombre,descripcion,precio,stock,stockminimo,idcategoria)"
        ." VALUES('$idarticulo','$nombre','$descripcion','$precio','$stock','$stockminimo','$idcategoria')";

  $con = conectar();
  $res = new stdClass();
  if ($con) {
    $st = $con->prepare($sql);
    $st->bind_param("issiiis",$idarticulo,$nombre,$descripcion,$precio,$stock,$stockminimo,$idcategoria);
    $st->execute();
    $st->close();
    $res->respuesta = true;
    $res->mensaje = "Articulo ingresado correctamente";
  }else {
    $res->respuesta = false;
  }
  echo json_encode($res);
