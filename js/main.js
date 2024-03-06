window.cargarTabla = function(){
  var ajax = $.ajax({
      type: 'GET'
    , url: "api/Articulos"
  });
  ajax.done(function(respuesta){
    var lista = JSON.parse(respuesta);
    window.procesarLista(lista);
  });
};
window.cargarSelect = function(){

  var ajax = $.ajax({
      type: 'GET'
    , url: "api/Categoria"
  });
  ajax.done(function(respuesta){
    var list = JSON.parse(respuesta);
    console.log(list);

  });


};

window.limpiarFormulario = function(){
  document.getElementById("idarticulo").reset();
};



window.procesarLista = function(lista){
  var $tbody = $(".tabla_articulos > tbody");
  $tbody.empty();

  for (var i = 0; i < lista.length; i++) {
    var articulo = lista[i];
    var $tr = $("<tr></tr>");
    var $th = $("<th scope='row'>1</th>");
    var $tdIdArticulo = $("<td></td>");
    var $tdNombre = $("<td></td>");
    var $tdDescripcion = $("<td></td>");
    var $tdPrecio= $("<td></td>");
    var $tdStock= $("<td></td>");
    var $tdStockMinimo= $("<td></td>");
    var $tdCategoria= $("<td></td>");
    var $tdAcciones = $("<td></td>");
    var $tdAcciones2 = $("<td></td>");
    $tdIdArticulo.text(articulo.idarticulo);
    $tdNombre.text(articulo.nombre);
    $tdDescripcion.text(articulo.descripcion);
    $tdPrecio.text(articulo.precio);
    $tdStock.text(articulo.stock);
    $tdStockMinimo.text(articulo.stockminimo);
    $tdCategoria.text(articulo.idcategoria);

    $tr.append($tdIdArticulo);
    $tr.append($tdNombre);
    $tr.append($tdDescripcion);
    $tr.append($tdPrecio);
    $tr.append($tdStock);
    $tr.append($tdStockMinimo);
    $tr.append($tdCategoria);



    var $btnEliminar = $("<button class='btn btn-danger btn-eliminar'>"
        + "<i class='material-icons'>delete</i></button>");
    $btnEliminar.data("articulo", articulo);
    $tdAcciones.append($btnEliminar);
    $tr.append($tdAcciones);
    var $btnModificar = $("<a href='modificarArticulo.php' class='btn btn-success btn-modificar'>"
        + "<i class='material-icons'>edit</i></a>");
    $btnModificar.data("articulo", articulo);
    $tdAcciones2.append($btnModificar);
    $tr.append($tdAcciones2);
    $tbody.append($tr);
  }
};


window.ingresarArticulo = function(){

console.log("ingresado");
  var idarticulo = $("#idarticulo").val()
    , nombre = $("#nombre").val()
    , descripcion = $("#descripcion").val()
    , precio = $("#precio").val()
    , stock = $("#stock").val()
    , stockminimo = $("#stockminimo").val()
    , idcategoria = $("#select_categoria").val()
   ;
console.log("ingresado2");
    var ajax = $.ajax({
      type: 'POST',
      url: "api/Articulos/create.php",
      data:{
        idarticulo:idarticulo,
        nombre:nombre,
        descripcion:descripcion,
        precio:precio,
        stock:stock,
        stockminimo:stockminimo,
        idcategoria:idcategoria
      }
    });
    ajax.done(function(respuesta){
      window.cargarTabla();
    });
};

$(document).ready(function(){

  $("#select_categoria").change(function(){

  });

window.cargarTabla();
  $("body").on("click", ".btn-eliminar", function(){

    console.log("eliminar");
      var articulo = $(this).data("articulo");
      console.log(articulo.idarticulo);
      var ajax = $.ajax({
        type: 'POST',
        url: "api/Articulos/delete.php",
        data:{
          idarticulo:articulo.idarticulo
        }
      });
      ajax.done(function(respuesta){

      });
      window.cargarTabla();
  });


  $("body").on("click", "#agregar_btn", function(){

      var errores = [];

//VALIDACIONES DE LOS CAMPOS
      if ($("#idarticulo").val().trim() == "" || $("#nombre").val().trim() == ""
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
      console.log("antes de ingresar");
      window.ingresarArticulo();
      window.limpiarFormulario();
      console.log("ingresa");
    }else {
      var $ul = $("<ul class='alert alert-danger' role='alert'></ul>");
      for(var i=0; i < errores.length; ++i){
        $ul.append("<li>"+errores[i]+"</li>");
      }
      $(".errores").append($ul);
    }
  });


  $("body").on("click", "#inicio_sesion", function(){
    var errores = [];

    if($("#correo").val().trim() == ""){
      errores.push("Debe ingresar un correo");
    }
    if($("#password").val().trim() == ""){
      errores.push("Debe ingresar su contraseña");
    }

    if(errores.length == 0){
      window.iniciarSesion();
    } else {
      var $ul = $("<ul class='alert alert-danger'></ul>");
      for(var i=0; i < errores.length; ++i){
        $ul.append("<li>"+errores[i]+"</li>");
      }
      $(".errores").append($ul);
    }
  });



});
