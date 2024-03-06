<?php

  require_once "../db.php";
  
  $sql = "SELECT idarticulo,nombre,descripcion,precio,stock,stockminimo,idcategoria
          FROM articulos";
  $query = query($sql);
  $lista = array();
  while ($art = mysqli_fetch_array($query)) {
    $articulo = new stdClass();
    $articulo->idarticulo = $art["idarticulo"];
    $articulo->nombre = $art["nombre"];
    $articulo->descripcion = $art["descripcion"];
    $articulo->precio = $art["precio"];
    $articulo->stock = $art["stock"];
    $articulo->stockminimo = $art["stockminimo"];
    $articulo->idcategoria = $art["idcategoria"];
    array_push($lista, $articulo);
  }
  echo json_encode($lista);
