<?php
$activa = "home";
require_once "templates/header.php"; ?>

    <section class="conteiner-fluid">


      <div class="row">

        <div class="col-lg-5 col-md-4 col-sm-12 " id="card-form">
          <div class="errores">

          </div>
          <div class="card shadow ">
            <h4 class="card-header">Ingresar Categoria</h4>
            <div class="card-body">


                <div class="form-group">
                  <label for="idcategoria">ID Categoria</label>
                  <input type="text" id="idcategoria" class="form-control">
                </div>
                <div class="form-group">
                  <label for="categoria">Categoria</label>
                  <input type="text" id="categoria" class="form-control">
                </div>
                <div class="form-group">
                  <label for="detalle">Detalle</label>
                  <textarea class="form-control" id="detalle" rows="2"></textarea>
                </div>

                <button type="button" class="btn btn-success"
                  id="agregar_cat_btn">Ingresar</button>
              </div>


            </div>


        </div>
        <div class="col-lg-6 col-md-8 col-sm-12">
          <table class="table tabla_categoria  white" id="table-categoria">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre Categoria</th>
                <th scope="col">Detalle</th>
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
    <script type="text/javascript" src="js/main2.js"></script>
  </body>
</html>
