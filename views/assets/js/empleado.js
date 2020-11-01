jQuery(document).ready(function () {
  $("#sexo").change(function () {
    // const dato = $("#sexo").val();
    cargarEstadoCiviles();
  });
});

cargarEstadoCiviles();

function cargarEstadoCiviles() {

    const dato = new FormData();
    dato.append("idSexo", $("#sexo").val());
    // console.log(dato);
    
    $.ajax({
      url: "ajax/EstadoCivilAjax.php",
      method: "POST",
      data: dato,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function (respuesta) {
        let sexo;
        $("#estadoCivil").children().remove().end();
        respuesta.forEach((element) => {
          sexo += `<option value=${element["idEstadoCivil"]}>${element["EstadoCivil"]}</option>`;
        });
    
        $("#estadoCivil").html(sexo);
      },
    });
    
}
