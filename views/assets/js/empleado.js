jQuery(document).ready(function () {
  $("#sexo").change(function () {
    // const dato = $("#sexo").val();
    cargarEstadoCiviles();
  });

  $("#departamento").change(function () {
    // const dato = $("#sexo").val();
    cargarPuestoDeTrabajo();
  });
});

cargarEstadoCiviles();
cargarPuestoDeTrabajo();

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

function cargarPuestoDeTrabajo() {

    const dato = new FormData();
    dato.append("idDepartamento", $("#departamento").val());
    // console.log(dato);
    
    $.ajax({
      url: "ajax/PuestroTrabajoAjax.php",
      method: "POST",
      data: dato,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function (respuesta) {
        let puesto;
        $("#puestoTrabajo").children().remove().end();
        respuesta.forEach((element) => {
            puesto += `<option value=${element["idPuesto"]}>${element["PuestoTrabajo"]}</option>`;
        });
                
        $("#puestoTrabajo").html(puesto);
      },
    });
}
