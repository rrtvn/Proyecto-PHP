<?php

  require_once '../db.php';

  $sql = "SELECT idcategoria,categoria,detalle FROM categoria";
  $query = query($sql);
  $lista = array();
  while ($cat = mysqli_fetch_array($query)) {
    $categoria = new stdClass();
    $categoria->idcategoria = $cat["idcategoria"];
    $categoria->categoria = $cat["categoria"];
    $categoria->detalle = $cat["detalle"];
    array_push($lista, $categoria);
  }
  echo json_encode($lista);
