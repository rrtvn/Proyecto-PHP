<?php
  require_once "templates/header.php";
 ?>

<div class="container pt-5">


    <div class="menu dark" id="menu-articulo">
      <span class="dropdown-item-text">Articulo</span>
        <a class="dropdown-item" href="articulo.php">Ingresar Articulo</a>
        <a class="dropdown-item" href="modificarArticulo.php">Modificar Artticulo</a>
    </div>
    <div class="menu dark" id="menu-categoria">
      <span class="dropdown-item-text">Categoria</span>
        <a class="dropdown-item" href="categoria.php">Ingresar Categoria</a>
        <a class="dropdown-item" href="modificarCategoria.php">Modificar Categoria</a>
    </div>

</div>


<?php require_once "templates/scripts.php";?>
<script type="js/main.js">

</script>
</body>
</html>
