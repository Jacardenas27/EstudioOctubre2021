$(document).ready(function () {
    $.datepicker.formatDate( "dd-mm-yyyy");
    if ($("#tablaConsultarUsuarios").length > 0) $("#tablaConsultarUsuarios").DataTable();
    if ($("#FechaNacimiento").length>0) $("#FechaNacimiento").datepicker({
        dateFormat: "yy-mm-dd"
      });
});