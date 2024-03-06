<?php
  //delete.php
  require_once "../db.php";

  $idcategoria = $_POST["idcategoria"]; //data:{id:id}

  $sql = "DELETE FROM categoria WHERE idcategoria=$idcategoria";
  query($sql);
  $respuesta = new stdClass();
  $respuesta->resultado = true;
  echo json_encode($respuesta);
