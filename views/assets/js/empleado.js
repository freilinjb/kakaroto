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



$(document).ready(function () {
    $("#formEmployee").submit(function (event) {
      event.preventDefault();
  
      const dato = new FormData();
      dato.append("nombre", $("#nombre").val());
      dato.append("apellido", $("#apellido").val());
      dato.append("idSEXO", $("#sexo").val());
      dato.append("idEstadoCivil", $("#estadoCivil").val());
      dato.append("idTipoIdentificacion", $("#tipoIdentificacion").val());
      dato.append("Identificacion", $("#identificacion").val());
      dato.append("telefono", $("#telefono").val());
      dato.append("celular", $("#celular").val());
      dato.append("correo", $("#correo").val());
      dato.append("fechaNacimiento", $("#fechaNacimiento").val());
      dato.append("idCentro", $("#idCentro").val());
      dato.append("idDepartamento", $("#departamento").val());
      dato.append("idPuestoTrabajo", $("#puestoTrabajo").val());
      dato.append("fechaIngreso", $("#fechaIngreso").val());
  
      $.ajax({
        url: "ajax/EmpleadoAjax.php",
        method: "POST",
        data: dato,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);

        },
      });
    });
  });
  