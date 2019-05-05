$(document).on("ready", function(){
	listar();
	M.AutoInit();
});
var listar = function(){
    var spanishlang = {
      "sProcessing":     "Por favor espere...",
      "sLengthMenu":     "Mostrar _MENU_ registros",
      "sZeroRecords":    "No se encontraron resultados",
      "sEmptyTable":     "Ningún dato disponible en esta tabla",
      "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
      "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
      "sInfoPostFix":    "",
      "sSearch":         "Buscar alumno:",
      "sUrl":            "",
      "sInfoThousands":  ",",
      "sLoadingRecords": "Cargando...",
      "oPaginate": {
          "sFirst":    "Primero",
          "sLast":     "Último",
          "sNext":     "Siguiente",
          "sPrevious": "Anterior"
      },
      "oAria": {
          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
      }
    }
    var table = $("#student_table").DataTable({
        dom: 'lfrtip',
        "language": spanishlang,//Cambia el idioma de la tabla a spanish.
        //"lengthChange": false,
        "processing":true,
        "ajax":{
            "method":"POST",
            "url":"../php/verAlumnos.php"
        },
        "columns":[
            {"data":"id"},
            {"data":"nombre"},
            {"data":"apellido"},
            {"data":"fechaingreso"},
            {"data":"grado"}
        ]//Se obtienen los datos de cada una de las columnas desde la base de datos.
    });
          
}