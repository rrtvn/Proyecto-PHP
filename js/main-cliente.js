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


window.procesarLista = function(lista){
  var $tbody = $(".tabla_cliente > tbody");
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
    var $tdCategoria= $("<td></td>");
    $tdIdArticulo.text(articulo.idarticulo);
    $tdNombre.text(articulo.nombre);
    $tdDescripcion.text(articulo.descripcion);
    $tdPrecio.text(articulo.precio);
    $tdStock.text(articulo.stock);
    $tdCategoria.text(articulo.idcategoria);

    $tr.append($tdIdArticulo);
    $tr.append($tdNombre);
    $tr.append($tdDescripcion);
    $tr.append($tdPrecio);
    $tr.append($tdStock);
    $tr.append($tdCategoria);


    $tbody.append($tr);
  }
};

$(document).ready(function(){
  window.cargarTabla();
});
