$(function () {
  $(document).ready(function () {
    //$(selector).inputmask("99-9999999");  //static mask
    $("#identificacion").inputmask({ mask: "999-9999999-9" });
    $("#telefono").inputmask({ mask: "(999) 999-9999" }); //specifying options
    $("#celular").inputmask({ mask: "(999) 999-9999" }); //specifying options
  });

  //VALIDACION
  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert("Form successful submitted!");
      },
    });

    $("#formEmployee").validate({
      rules: {
        
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
        identificacion: {
          required: true,
        },
        usuario: {
          required: true,
        },
        clave: {
          required: true,
        },
        tipoUsuario: {
          required: true,
        },
        telefono: {
          required: true,
        },
        correo: {
          required: true,
          email: true,
        },
        fechaNacimiento: {
          required: true,
        },
        estado: {
          required: true,
        },
      },
      messages: {
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
        //e.preventDefault();
        console.log('evento: ', e);
        //return;
        const dato = new FormData();

        // dato.append("foto", $("#nuevaImagen")[0].files[0]);

        dato.append("nombre", $("#nombre").val());
        dato.append("apellido", $("#apellido").val());
        dato.append("idSexo", $("#sexo").val());
        dato.append("identificacion", $("#identificacion").val());
        dato.append("usuario", $("#usuario").val());
        dato.append("clave", $("#clave").val());
        dato.append("tipoUsuario", $("#tipoUsuario").val());
        dato.append("telefono", $("#telefono").val());
        dato.append("correo", $("#correo").val());
        dato.append("fechaNacimiento", $("#fechaNacimiento").val());
        dato.append("estado", $("#estado").val());

        console.log('daara: ', dato);
        return;
        // $.ajax({
        //   url: "ajax/EmpleadoAjax.php",
        //   method: "POST",
        //   data: dato,
        //   cache: false,
        //   contentType: false,
        //   processData: false,
        //   dataType: "json",
        //   success: function (respuesta) {
        //     if (respuesta[0]["status"] == 200) {
        //       Swal.fire("Ok!", "Se ha guardado correctamente!", "success");
        //     }

        //     console.log(respuesta);
        //     $(".form-control").val("");
        //     $("#close").click();
        //   },
        // });
      },
    });
  });

  $('#registroCliente').click(function() {
    $('#idEmpleado').val(0);
    console.log('click');
  });

  //EDITAR EMPLEADOS
  $("#empleados").on("click", ".btn-editar", function () {
    console.log($(".form-control").val());

    const idEmpleado = $(this).attr("idEmpleado");
    console.log('idEmpleado: ', idEmpleado);
    $('#idEmpleado').val(idEmpleado);

    const data = new FormData();
    data.append("idEmpleado", idEmpleado);

    $.ajax({
      url: "ajax/EmpleadoAjax.php",
      method: "POST",
      data: data,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success: function (respuesta) {
        $("#nombreP").text(respuesta["nombre"] + " " + respuesta["apellido"]);
        $("#departamentoP").text(
          (
            respuesta["PuestoTrabajo"] +
            " del departamento de " +
            respuesta["Departamento"]
          ).toUpperCase()
        );

        if (respuesta["foto_url"]) {
          $(".previsualizar").attr("src", respuesta["foto_url"]);
        } else {
          $(".previsualizar").attr(
            "src",
            "views/assets/img/empleados/foto_perfil_hombre.jpg"
          );
        }

        $("#idEmpleado").val(respuesta["idEmpleado"]);
        $("#nombreEditar").val(respuesta["nombre"]);
        $("#apellidoEditar").val(respuesta["apellido"]);
        $("#sexoEditar").val(respuesta["sexo"]);
        $("#estadoCivilEditar").val(respuesta["estadoCivil"]);
        $("#tipoIdentificacionEditar").val(respuesta["idTipoIdentificacion"]);
        $("#identificacionEditar").val(respuesta["identificacion"]);
        $("#telefonoEditar").val(respuesta["telefono"]);
        $("#celularEditar").val(respuesta["celular"]);
        $("#correoEditar").val(respuesta["Correo"]);
        $("#fechaNacimientoEditar").val(respuesta["fechaNacimiento"]);
        $("#centroEditar").val(respuesta["idCentro"]);
        $("#departamentoEditar").val(respuesta["idDepartamento"]);
        $("#puestoTrabajoEditar").val(respuesta["idPuesto"]);
        $("#fechaIngresoEditar").val(respuesta["fechaIngreso"]);
      },
    });
  });

  /*=============================================
SUBIENDO LA FOTO DEL PRODUCTO
=============================================*/

  $(".nuevaImagen").change(function () {
    var imagen = this.files[0];

    /*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/
    if (imagen["type"] != "image/jpeg" && imagen["type"] != "image/png") {
      $(".nuevaImagen").val("");
      swal({
        title: "Error al subir la imagen",
        text: "¡La imagen debe estar en formato JPG o PNG!",
        type: "error",
        confirmButtonText: "¡Cerrar!",
      });
    } else if (imagen["size"] > 2000000) {
      $(".nuevaImagen").val("");

      swal({
        title: "Error al subir la imagen",
        text: "¡La imagen no debe pesar más de 2MB!",
        type: "error",
        confirmButtonText: "¡Cerrar!",
      });
    } else {
      const datosImagen = new FileReader();
      datosImagen.readAsDataURL(imagen);
      $(datosImagen).on("load", function (event) {
        var rutaImagen = event.target.result;
        $(".previsualizar").attr("src", rutaImagen);
      });
    }
  });
});
