$(document).ready(function(){

  $("body").on("click", "#modificar_articulo", function(){

      var errores = [];

  //VALIDACIONES DE LOS CAMPOS
      if ( $("#nombre").val().trim() == ""
      || $("#descripcion").val().trim() == "" || $("#precio").val().trim() == ""
      || $("#stock").val().trim() == "" || $("#stockminimo").val().trim() == "" ) {
          errores.push("Todos los campos son obligatorios");
      } if(isNaN($("#idarticulo").val().trim())){
        errores.push("La id debe ser un numero");
      } if(isNaN($("#precio").val().trim())){
        errores.push("El precio debe ser un numero");
      } if(isNaN($("#stock").val().trim())){
        errores.push("El stock debe ser un numero");
      } if(isNaN($("#stockminimo").val().trim())){
        errores.push("El stock minimo debe ser un numero");
      }

  //ver forma de mostrar las validaciones
    $(".errores").empty();
    if (errores.length == 0) {
      window.ingresarArticulo();
    }else {
      var $ul = $("<ul class='alert alert-danger' role='alert'></ul>");
      for(var i=0; i < errores.length; ++i){
        $ul.append("<li>"+errores[i]+"</li>");
      }
      $(".errores").append($ul);
    }
  });

  $("body").on("click", "#modificar_categoria", function(){

      var errores = [];

  //VALIDACIONES DE LOS CAMPOS
      if ( $("#categoria").val().trim() == ""
      || $("#detalle").val().trim() == "" ) {
          errores.push("Todos los campos son obligatorios");
      } if(isNaN($("#idcategoria").val().trim())){
        errores.push("La id debe ser un numero");
      }

  //ver forma de mostrar las validaciones
    $(".errores").empty();
    if (errores.length == 0) {
      window.ingresarCategoria();
    }else {
      var $ul = $("<ul class='alert alert-danger' role='alert'></ul>");
      for(var i=0; i < errores.length; ++i){
        $ul.append("<li>"+errores[i]+"</li>");
      }
      $(".errores").append($ul);
    }
  });

});
