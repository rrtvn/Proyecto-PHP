<?php

function conectar(){
  $servidor = "localhost";
  $usuario = "root";
  $pass = "";
  $baseDeDatos = "etienda";
  $link = mysqli_connect($servidor, $usuario, $pass, $baseDeDatos);
  return $link;
}

function query($sql){
   $link = conectar();
   return mysqli_query($link, $sql);

}

function iniciarSesion($correo, $password){
     $usuario = null;

     $sql = "SELECT idusuario,nombre,apellido,correo,password,tipousuario FROM usuario"
        ." WHERE correo='$correo' AND password='$password'";
     $query = query($sql);
     if($ms = mysqli_fetch_array($query)){//cuando la query da un registro
       $usuario = new stdClass();
       $usuario->idusuario = $ms["idusuario"];
       $usuario->nombre = $ms["nombre"];
       $usuario->apellido = $ms["apellido"];
       $usuario->correo = $ms["correo"];
       $usuario->password = $ms["password"];
       $usuario->tipousuario = $ms["tipousuario"];
     }
     return $usuario;

}
function getCategoria(){

  $sql = "SELECT * FROM categoria";
  $query = query($sql);
  $list = array();
  while($ms = mysqli_fetch_array($query)){//cuando la query da un registro
    $categoria = new stdClass();
    $categoria->idcategoria = $ms["idcategoria"];
    $categoria->categoria = $ms["categoria"];
    array_push($list, $categoria);
  }
  return $list;

}
