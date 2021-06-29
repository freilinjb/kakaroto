<!-- <style>
    .btn-file:hover {
        cursor: pointer;
    }

    .emp-profile {
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }

    .profile-img {
        text-align: center;
    }

    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -30%;
        width: 60%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }

    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }

    .profile-head h5 {
        color: #333;
    }

    .profile-head h6 {
        color: #0062cc;
    }

    .profile-edit-btn {
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }

    .profile-head .nav-tabs {
        margin-bottom: 5%;
    }

    .profile-head .nav-tabs .nav-link {
        font-weight: 600;
        border: none;
    }

    .profile-head .nav-tabs .nav-link.active {
        border: none;
        border-bottom: 2px solid #0062cc;
    }

    .profile-work {
        padding: 14%;
        margin-top: -15%;
    }

    .profile-work p {
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }

    .profile-work a {
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }

    .profile-work ul {
        list-style: none;
    }

    .profile-tab label {
        font-weight: 600;
    }

    .profile-tab p {
        font-weight: 600;
        color: #0062cc;
    }
</style> -->

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Adminiscación de Compras</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Layout</a></li>
          <li class="breadcrumb-item active">Fixed Layout</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">

  <div class="container-fluid">d
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card card-info card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              Registro de Compras
            </h3>
          </div>
          <div class="card-body">





            <form id="formEmployee">

              <div class="modal-body">
                <div class="card hovercard">
                  <div class="card-body">
                    <div class="row">
                      <input type="hidden" name="idEmpleado" id="idEmpleado" value="0">
                      <div class="col-md-3">
                        <!-- Date dd/mm/yyyy -->
                        <div class="form-group">
                          <label>Codigo de Barra</label>
                          <div class="input-group">
                            <input type="text" class="form-control" name="codigo" id="codigo" value="crack2" placeholder="Ingrese el codigo" autocomplete="off">
                          </div>
                          <!-- /.input group -->
                        </div>
                      </div>



                      <div class="col-md-5">
                        <!-- Date dd/mm/yyyy -->
                        <div class="form-group">
                          <label>Descripcion</label>
                          <div class="input-group">
                            <input type="text" class="form-control" name="descripcion" id="descripcion" value="crack2" placeholder="Ingrese el descripcion" autocomplete="off">
                          </div>
                          <!-- /.input group -->
                        </div>
                      </div>

                      <div class="col-md-3">
                        <!-- Date dd/mm/yyyy -->
                        <div class="form-group">
                          <label>Cantiadad</label>
                          <div class="input-group">
                            <input type="number" class="form-control" name="cantidad" id="cantidad" value="crack2" placeholder="Ingrese el cantidad" autocomplete="off">
                          </div>
                          <!-- /.input group -->
                        </div>
                      </div>

                      <div class="col-md-3">
                        <!-- Date dd/mm/yyyy -->
                        <div class="form-group">
                          <label>Precio Compra</label>
                          <div class="input-group">
                            <input type="text" class="form-control" name="codigo" id="codigo" value="crack2" placeholder="Ingrese el codigo" autocomplete="off">
                          </div>
                          <!-- /.input group -->
                        </div>
                      </div>







                      <div class="col-md-5">
                        <!-- Date dd/mm/yyyy -->
                        <div class="form-group">
                          <label>Apellido</label>
                          <div class="input-group">
                            <input type="text" class="form-control" name="apellido" id="apellido" value="crack2" placeholder="Descripcion" autocomplete="off">
                          </div>
                          <!-- /.input group -->
                        </div>
                      </div>
                      <div class="col-6-lg col-xl-6 col-sm-12">
                        <div class="form-group">
                          <label>Sexo</label>
                          <select class="form-control" name="sexo" id="sexo">
                            <option value="0" disabled selected>Seleccione una opción</option>
                            <?php foreach ($sexo as $key) {
                              echo '<option value="' . $key['idSexo'] . '">' . $key['sexo'] . '</option>';
                            }  ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-6-lg col-xl-6 col-sm-12">
                        <div class="form-group">
                          <label>Identificacion</label>
                          <div class="input-group">
                            <input type="text" class="form-control" name="identificacion" id="identificacion" value="03105697175" placeholder="Ingrese el numero de ducumento" autocomplete="off">
                          </div>
                        </div>
                      </div>
                      <div class="col-6-lg col-xl-6 col-sm-12">
                        <div class="form-group">
                          <label>Usuario</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="usuario" id="usuario" autocomplete="off" value="frack" placeholder="Ingrese el nobre de usuario">
                          </div>
                        </div>
                      </div>
                      <div class="col-6-lg col-xl-6 col-sm-12">
                        <div class="form-group">
                          <label>Contraseña</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="text" class="form-control" name="clave" id="clave" autocomplete="off" value="1423" placeholder="Ingrese la contraseña">
                          </div>
                        </div>
                      </div>
                      <div class="col-6-lg col-xl-6 col-sm-12">
                        <div class="form-group">
                          <label for="tipoUsuario">Tipo de usuario</label>
                          <select class="form-control" name="tipoUsuario" id="tipoUsuario" required>
                            <option value="0" disabled selected>Seleccione una opción</option>
                            <?php foreach ($tipoUsuario as $key) {
                              echo '<option value="' . $key['idTipo'] . '">' . $key['descriccion'] . '</option>';
                            }  ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-6-lg col-xl-6 col-sm-12">
                        <div class="form-group">
                          <label>Telefono</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" name="telefono" id="telefono" value="849-565-2312" autocomplete="off">
                          </div>
                        </div>
                      </div>
                      <div class="col-6-lg col-xl-6 col-sm-12">
                        <div class="form-group">
                          <label>Correo</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input type="email" class="form-control" name="correo" id="correo" value="fras@fsd.com" autocomplete="off">
                          </div>
                        </div>
                      </div>
                      <div class="col-6-lg col-xl-6 col-sm-12">
                        <!-- Date dd/mm/yyyy -->
                        <div class="form-group">
                          <label>Fecha de nacimiento:</label>

                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" value="">
                          </div>
                        </div>
                      </div>
                      <div class="col-6-lg col-xl-6 col-sm-12">
                        <div class="form-group">
                          <label for="estado">Estado</label>
                          <select id="estado" class="form-control" name="estado" required>
                            <option value="1" selected>Activo</option>
                            <option value="0">Inactivo</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <!-- <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button> -->
                <button type="submit" class="btn btn-info">Save changes</button>
              </div>
            </form>










          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>


<!-- MODAL REGISTRAR EMPLEADO-->


<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<!-- END MODAL REGISTRAR EMPLEADO-->

<!-- MODAL REGISTRAR EDITAR-->


<!-- /.modal-dialog -->
</div>

<!-- END MODAL REGISTRAR EMPLEADO-->

<!-- SCRIPT PERSONAL -->
<script src="views/assets/js/empleado.js"></script>
<!-- DataTables  & Plugins -->

<link rel="stylesheet" href="views/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="views/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="views/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<script src="views/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="views/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="views/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="views/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="views/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="views/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="views/assets/plugins/jszip/jszip.min.js"></script>
<script src="views/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="views/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="views/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="views/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="views/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="views/assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- jquery-validation -->
<script src="views/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="views/assets/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- sweetalert2 -->

<script src="views/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- sweetalert2-theme-bootstrap-4 -->
<link rel="stylesheet" href="views/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

<!-- Page specific script -->
<script>
  $(function() {
    $("#empleados").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "info": true,
      "paging": true,
      "pageLength": 7,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
    }).buttons().container().appendTo('#empleados_wrapper  .col-md-6:eq(0)');
  });
</script>