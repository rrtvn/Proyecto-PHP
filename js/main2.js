window.cargarTabla = function(){
  var ajax = $.ajax({
      type: 'GET'
    , url: "api/Categoria"
  });
  ajax.done(function(respuesta){
    var lista = JSON.parse(respuesta);
    window.procesarLista(lista);
  });
};

window.procesarLista = function(lista){
  var $tbody = $(".tabla_categoria > tbody");
  $tbody.empty();
  for (var i = 0; i < lista.length; i++) {
    var categoria = lista[i];
    var $tr = $("<tr></tr>");
    var $th = $("<th scope='row'>1</th>");
    var $tdIdCategoria = $("<td></td>");
    var $tdCategoria = $("<td></td>");
    var $tdDetalle = $("<td></td>");

    var $tdAcciones = $("<td></td>");
    var $tdAcciones2 = $("<td></td>");

    $tdIdCategoria.text(categoria.idcategoria);
    $tdCategoria.text(categoria.categoria);
    $tdDetalle.text(categoria.detalle);

    $tr.append($tdIdCategoria);
    $tr.append($tdCategoria);
    $tr.append($tdDetalle);


    var $btnEliminar = $("<button class='btn btn-danger btn-eliminar'>"
        + "<i class='material-icons center'>delete</i></button>");
    $btnEliminar.data("categoria", categoria);
    $tdAcciones.append($btnEliminar);
    $tr.append($tdAcciones);
    var $btnModificar = $("<a href='modificarCategoria.php' class='btn btn-success btn-modificar'>"
        + "<i class='material-icons center'>edit</i></a>");
    $btnModificar.data("categoria", categoria);
    $tdAcciones2.append($btnModificar);
    $tr.append($tdAcciones2);
    $tbody.append($tr);
  }
};
window.ingresarCategoria = function(){
  var idcategoria = $("#idcategoria").val()
    , categoria = $("#categoria").val()
    , detalle = $("#detalle").val()
    console.log(detalle);
    ;
    var url = "api/Categoria/create.php";
    //peticion POST ajax
    var ajax = $.ajax({
      type: 'POST',
      url: url,
      data:{
        idcategoria:idcategoria,
        categoria:categoria,
        detalle:detalle
      }
    });
    ajax.done(function(respuesta){
      window.cargarTabla();
    });
};
$(document).ready(function(){

//NO ELIMINA
window.cargarTabla();

$("body").on("click", ".btn-eliminar", function(){
    var categoria = $(this).data("categoria");
    console.log(categoria);
    var ajax = $.ajax({
      type: 'POST',
      url: "api/Categoria/delete.php",
      data:{
        idcategoria:categoria.idcategoria
      }
    });
    ajax.done(function(respuesta){
      window.cargarTabla();
    });
  });
    window.cargarTabla();



$("body").on("click", "#agregar_cat_btn", function(){

        var errores = [];

    //VALIDACIONES DE LOS CAMPOS
        if ($("#idcategoria").val().trim() == "" || $("#categoria").val().trim() == ""
        || $("#detalle").val().trim() == "" ) {
            errores.push("Todos los campos son obligatorios");
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
