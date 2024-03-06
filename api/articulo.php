<?php

  require_once "modelo.php";

  class Articulo extends Modelo{



    private $idarticulo;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $stockminimo;
    private $idcategoria];

    public function __construct(){
      parent::__construct();
    }

    public function getArticulo(){

      $sql="SELECT * FROM articulos";
      $resultado=$this->_db->query($sql);
      $articulo = $resultado->fetch_all(MYSQLI_ASSOC);
      if ($articulo) {
        return $articulo;
        $articulo->close;
      }else {
        echo "Error en la conexion";
      }
    }


  }

 ?>
