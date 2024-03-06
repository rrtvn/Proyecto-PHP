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
               <input type="text" id="idarticulo" class="form-control" disabled>
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
               <select class="form-control" id="categoria">
                 <option value="">Seleccione una opcion</option>
               </select>
             </div>
             <button type="button" class="btn btn-success"
               id="modificar_articulo">Modificar</button>
           </div>


         </div>


     </div>

   </div>

 </section>


 <?php require_once "templates/scripts.php";?>
 <script type="text/javascript" src="js/main-modificar.js"></script>
</body>
</html>
