

<?php
  require_once "api/categoria.php";

  $categoria = new Categoria();
  $list = $categoria->getCategoria();
  if ($list) {


 ?>
 <?php
 require_once "templates/header.php";
 ?>

    <section class="conteiner-fluid">


      <div class="row">

        <div class="col-lg-5 col-md-4 col-sm-12 " id="card-form">
          <div class="errores">

          </div>
          <div class="card shadow ">
            <h4 class="card-header">Ingresar Artículos</h4>
            <div class="card-body">


                <div class="form-group">
                  <label for="idarticulo">ID Articulo</label>
                  <input type="text" id="idarticulo" class="form-control">
                </div>
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" id="nombre" class="form-control">
                </div>
                <div class="form-group">
                  <label for="descripcion">Descripcion</label>
                  <textarea class="form-control" id="descripcion" rows="2"></textarea>
                </div>
                <div class="form-group">
                  <label for="precio">Precio</label>
                  <input type="text" id="precio" class="form-control">
                </div>
                <div class="form-group">
                  <label for="stock">Stock</label>
                  <input type="text" id="stock" class="form-control">
                  <label for="stockminimo">Stock Minimo</label>
                  <input type="text" id="stockminimo" class="form-control">
                </div>
                <div class="form-group">

                </div>
                <div class="form-group">
                  <label for="curso_rendido">Categoria</label>
                  <select class="form-control" id="select_categoria" onchange="cargarSelect();" >
                      <option value=""> Seleccione una opcion </option>
                      <?php foreach ($list as $c){

                        echo $c['categoria'];

                        ?>
                        <option value="<?php echo $c['idcategoria']; ?>"><?php echo $c['categoria']; ?></option>

                      <?php } ?>


                  </select>
                </div>
                <button type="button" onclick="limpiarFormulario()" class="btn btn-success"
                  id="agregar_btn">Ingresar</button>
              </div>


            </div>


        </div>
        <div class="col-lg-6 col-md-8 col-sm-12">
          <table class="table tabla_articulos  white" id="table-articulos">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Stock Min</th>
                <th scope="col">Categoria</th>
                <th scope="col">Eliminar</th>
                <th scope="col">Modificar</th>
              </tr>
            </thead>
            <tbody>

            </tbody>

          </table>
        </div>
      </div>

    </section>


    <?php require_once "templates/scripts.php";?>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
<?php
  }
 ?>
