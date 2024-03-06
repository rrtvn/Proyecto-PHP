<?php

  require_once "modelo.php";

  class Categoria extends Modelo{

    private $idcategoria;
    private $categoria;
    private $descripcion;

    public function __construct(){
      parent::__construct();
    }

    public function getCategoria(){

      $sql="SELECT * FROM categoria";
      $resultado=$this->_db->query($sql);
      $categoria = $resultado->fetch_all(MYSQLI_ASSOC);
      if ($categoria) {
        return $categoria;
        $categoria->close;
      }else {
        echo "Error en la conexion";
      }
    }

    


  }

 ?>
