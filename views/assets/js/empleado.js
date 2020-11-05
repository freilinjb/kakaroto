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
      sexo =
        '<option value="" disabled selected>Seleccione una opción</option>';
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
  //$(selector).inputmask("99-9999999");  //static mask
  $("#identificacion").inputmask({ mask: "999-9999999-9" }); 
  $("#telefono").inputmask({ mask: "(999) 999-9999" }); //specifying options
  $("#celular").inputmask({ mask: "(999) 999-9999" }); //specifying options
  //$(selector).inputmask("9-a{1,3}9{1,3}"); //mask with dynamic syntax
});
// $(document).ready(function () {

//   $("#formEmployee").submit(function (event) {
//     event.preventDefault();

//     var $form = $(this);

//   // check if the input is valid using a 'valid' property
//   if (!$form.valid) return false;

//     if ($("#nombre").val() == "" || $("#apellido").val() || $("#sexo").val())
//       const dato = new FormData();
//     dato.append("nombre", $("#nombre").val());
//     dato.append("apellido", $("#apellido").val());
//     dato.append("idSexo", $("#sexo").val());
//     dato.append("idEstadoCivil", $("#estadoCivil").val());
//     dato.append("idTipoIdentificacion", $("#tipoIdentificacion").val());
//     dato.append("Identificacion", $("#identificacion").val());
//     dato.append("telefono", $("#telefono").val());
//     dato.append("celular", $("#celular").val());
//     dato.append("correo", $("#correo").val());
//     dato.append("fechaNacimiento", $("#fechaNacimiento").val());
//     dato.append("idCentro", $("#centro").val());
//     dato.append("idDepartamento", $("#departamento").val());
//     dato.append("idPuestoTrabajo", $("#puestoTrabajo").val());
//     dato.append("fechaIngreso", $("#fechaIngreso").val());

//     $.ajax({
//       url: "ajax/EmpleadoAjax.php",
//       method: "POST",
//       data: dato,
//       cache: false,
//       contentType: false,
//       processData: false,
//       dataType: "json",
//       success: function (respuesta) {
//         console.log(respuesta);
//       },
//     });
//   });
// });

//VALIDACION
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert("Form successful submitted!");
    },
  });

  $("#formEmployee").validate({
    rules: {
      correo: {
        required: true,
        email: true,
      },
      nombre: {
        required: true,
        minlength: 2,
      },
      apellido: {
        required: true,
      },
      apellido: {
        required: true,
      },
      sexo: {
        required: true,
      },
      estadoCivil: {
        required: true,
      },
      tipoIdentificacion: {
        required: true,
      },
      identificacion: {
        required: true,
      },
      fechaNacimiento: {
        required: true,
      },
      puestoTrabajo: {
        required: true,
      },
      departamento: {
        required: true,
      },
      centro: {
        required: true,
      },
      fechaIngreso: {
        required: true,
      },
    },
    messages: {
      correo: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address",
      },
      nombre: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
      },
      apellido: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
      },
      sexo: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
      },
      estadoCivil: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
      },
      terms: "Please accept our terms",
    },
    errorElement: "span",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback");
      element.closest(".form-group").append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass("is-invalid");
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass("is-invalid");
    },
    submitHandler: function (e) {
      console.log("asdf");
      const dato = new FormData();
      dato.append("nombre", $("#nombre").val());
      dato.append("apellido", $("#apellido").val());
      dato.append("idSexo", $("#sexo").val());
      dato.append("idEstadoCivil", $("#estadoCivil").val());
      dato.append("idTipoIdentificacion", $("#tipoIdentificacion").val());
      dato.append("Identificacion", $("#identificacion").val());
      dato.append("telefono", $("#telefono").val());
      dato.append("celular", $("#celular").val());
      dato.append("correo", $("#correo").val());
      dato.append("fechaNacimiento", $("#fechaNacimiento").val());
      dato.append("idCentro", $("#centro").val());
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
    },
  });
});
