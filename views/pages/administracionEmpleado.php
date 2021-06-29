<?php
$empleado = EmpleadoController::getEmpleados(null, null);
$sexo = EmpleadoController::getSexo(null, null);
$tipoUsuario = EmpleadoController::getTipoUsuario(null, null);

?>

<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h3 class="m-0"> Administración de Empleados</h3>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="index.php?route=home">Home</a></li>
        <li class="breadcrumb-item"><a href="index.php?route=404">Layout</a></li>
        <li class="breadcrumb-item active">Top Navigation</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Registros</h3>
      </div>
      <div class="card-body">
        <div class="">
          <button class="btn btn-info mb-3" data-toggle="modal" data-target="#modalEditarEmpleado" id="nuevoEmpleado">
            <i class="fa fa-plus"></i>
            Nuevo Empleado
          </button>
        </div>
        <table class="table table-bordered table-striped table-hover" id="tableEmpleado">
          <thead class="thead-dark">
            <th>#</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de Nacimiento</th>
            <th>correo</th>
            <th>Telefono</th>
            <th>Estado</th>
            <th>Acción</th>
          </thead>
          <tbody>
            <?php
            foreach ($empleado as $index => $value) {
              $estado = null;
              if ($value["estado"] == 'Activo') {
                $estado = "<span class='badge badge-primary'>" . $value["estado"] . "</span>";
              } else {
                $estado = "<span class='badge badge-danger'>" . $value["estado"] . "</span>";
              }
              echo '<tr>';
              echo '<td>' . ($index + 1) . '</td>';
              echo '<td>' . $value["user"] . '</td>';
              echo '<td>' . $value["nombre"] . '</td>';
              echo '<td>' . $value["apellido"] . '</td>';
              echo '<td>' . $value["fechaNaci"] . '</td>';
              echo '<td>' . $value["correo"] . '</td>';
              echo '<td>' . $value["telefono"] . '</td>';
              echo '<td>' . $estado  . '</td>';
              echo '<td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary btn-editar" data-toggle="modal" data-target="#modalEditarEmpleado" idEmpleado="' . $value["idEmpleado"] . '">Editar</button>
                    <button type="button" class="btn btn-danger btn-eliminar"  idEmpleado="' . $value["idEmpleado"] . '">Eliminar</button>
                  </div>
                    </td>';
              echo '</tr>';
            }
            ?>
          </tbody>
        </table>
      </div>
      <div class="card-footer">
        Footer
      </div>
    </div>
  </div>
</div>

<!-- MODAL DE REGISTRAR Y EDITAR EMPLEADO -->
<div class="modal fade" id="modalEditarEmpleado" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloModel">Editar Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" class="row">
          <input type="hidden" value="0" id="idEmpleadoEditar" required>
          <div class="col-6">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre" class="form-control" value="crack prueba" required>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="apellido">Apellido</label>
              <input type="text" name="apellido" id="apellido" placeholder="Ingrese el nombre" class="form-control" value="prueba123" required>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="sexo">Sexo</label>
              <select id="sexo" class="form-control" name="sexo" required>
                <option>Seleccione una opción</option>
                <?php foreach ($sexo as $key) {
                  echo '<option value="' . $key['idSexo'] . '">' . $key['sexo'] . '</option>';
                }  ?>
              </select>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="identificacion">Identificacion</label>
              <input type="text" name="identificacion" id="identificacion" placeholder="Ingrese el nombre" class="form-control" value="031056465" required>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="usuario">Usuario</label>
              <input name="usuario" id="usuario" placeholder="Ingrese el nombre" class="form-control" value="crack123" required>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="clave">Contraseña</label>
              <input type="password" name="clave" id="clave" placeholder="Ingrese el nombre" class="form-control" value="1423" required>
            </div>
          </div>
          <!-- 
          <div class="col-6">
            <div class="form-group">
              <label for="repetirClave">Repetir Contraseña</label>
              <input name="repetirClave" id="repetirClave" placeholder="Ingrese el nombre" class="form-control" required>
            </div>
          </div> -->

          <div class="col-6">
            <div class="form-group">
              <label for="tipoUsuario">Tipo de usuario</label>
              <select id="tipoUsuario" class="form-control" name="tipoUsuario" required>
                <option>Seleccione una opción</option>
                <?php foreach ($tipoUsuario as $key) {
                  echo '<option value="' . $key['idTipo'] . '">' . $key['descriccion'] . '</option>';
                }  ?>
              </select>
            </div>
          </div>
          <hr>


          <div class="col-6">
            <div class="form-group">
              <label for="telefono">Telefono</label>
              <input name="telefono" id="telefono" placeholder="Ingrese el nombre" class="form-control" value="849-565-5555" required>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="correo">Correo</label>
              <input name="correo" id="correo" placeholder="Ingrese el nombre" class="form-control" value="crack@crack.com" required>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="fechaNacimiento">Fecha de Nacimiento</label>
              <input type="date" name="fechaNacimiento" id="fechaNacimiento" placeholder="Ingrese el nombre" class="form-control" value="05/06/1995" required>
            </div>
          </div>

          <div class="col-6">
            <div class="form-group">
              <label for="estado">Estado</label>
              <select id="estado" class="form-control" name="estado" required>
                <option value="1" selected>Activo</option>
                <option value="0">Inactivo</option>
              </select>
            </div>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" click=>Guardar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          </div>
      </div>

    </div>
    |<?php
      $registro = new EmpleadoController();
      $registro->registrarEmpleado();
      ?>
    </form>

  </div>
</div>
</div>
</div>


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<!-- Bootstrap -->

<!-- <script src="views/assets/plugins/jquery/jquery.min.js"></script>
<script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
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
<!-- AdminLTE App -->
<script src="views/assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- jquery-validation -->
<script src="views/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="views/assets/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- sweetalert2 -->

<script src="views/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- sweetalert2-theme-bootstrap-4 -->
<link rel="stylesheet" href="views/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

<!-- SELECT -->
<link rel="stylesheet" href="views/assets/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="views/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- Select2 -->
<script src="views/assets/plugins/select2/js/select2.full.min.js"></script>

<script src="views/assets/js/administracionEmpleado.js"></script>

<script>
  $(function() {
    //   $("#tableEmpleado").DataTable({
    //     "responsive": true,
    //     "lengthChange": false,
    //     "autoWidth": false,
    //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    //   })
    $('#estado').select2()
    $('#sexo').select2()
    $('#tipoUsuario').select2()
  });
</script>