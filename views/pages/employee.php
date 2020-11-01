<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Employee</h1>
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-edit"></i>
                            Toasts Examples <small>built in AdminLTE</small>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <button class="btn btn-info mb-3" data-toggle="modal" data-target="#modalEmployeeRegister">
                                Employee
                            </button>
                        </div>
                        <table id="empleados" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>CellPhone</th>
                                    <th>Puesto de trabajo</th>
                                    <th>Departamento</th>
                                    <th>Centro</th>
                                    <th>Estado</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $employee = EmployeeController::showEmployee(null, null);
                                $clase = null;
                                foreach ($employee as $key => $value) {

                                    if ($value["Estado"] == "activo") {
                                        $clase = "<span class='badge badge-success'>" . $value["Estado"] . "</span>";
                                    }

                                    echo '<tr>
                                    <td>' . ($key + 1) . '</td>
                                    <td>' . $value["nombre"] . '</td>
                                    <td>' . $value["Correo"] . '</td>
                                    <td>' . $value["telefono"] . '</td>
                                    <td>' . $value["celular"] . '</td>
                                    <td>' . $value["PuestoTrabajo"] . '</td>
                                    <td>' . $value["Departamento"] . '</td>             
                                    <td>' . $value["Centro"] . '</td>
                                    <td>' . $clase . '</td>
                                    <td>
                                        <div class="btn-group">    
                                        <button class="btn btn-info btnEditEmployee" data-toggle="modal" data-target="#modalEditarCliente" idEmployee="' . $value["idEmpleado"] . '"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-danger btnDeleteEmployeee" idEmployee="' . $value["idEmpleado"] . '"><i class="fas fa-trash"></i></button>
                                        </div>  
                                    </td>
                                    </tr>';
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>CellPhone</th>
                                    <th>Puesto de trabajo</th>
                                    <th>Departamento</th>
                                    <th>Centro</th>
                                    <th>Estado</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>


<!-- MODAL -->
<div class="modal fade" id="modalEmployeeRegister" style="display: none; padding-right: 17px;" aria-modal="true">
    <div class="modal-dialog modal-lg">
        <form class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title">Register Employee</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="card card-info card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="datos-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="datospersonale-tab" data-toggle="pill" href="#datospersonale" role="tab" aria-controls="datospersonale" aria-selected="true">Información personal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="datosempresa-tab" data-toggle="pill" href="#datosempresa" role="tab" aria-controls="datosempresa" aria-selected="false">Información laboral</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="datostabContent">
                                    <div class="tab-pane fade active show" id="datospersonale" role="tabpanel" aria-labelledby="datospersonale-tab">
                                        <div class="row">
                                            <div class="col-6-lg col-xl-6 col-sm-12">
                                                <!-- Date dd/mm/yyyy -->
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" required>
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-6-lg col-xl-6 col-sm-12">
                                                <!-- Date dd/mm/yyyy -->
                                                <div class="form-group">
                                                    <label>Apellido</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="apellido" placeholder="Ingrese el apellido" required>
                                                    </div>
                                                    <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-6-lg col-xl-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Sexo</label>
                                                    <select class="form-control" name="sexo" id="sexo">
                                                        <?php
                                                        $sexo = EmployeeController::listarSexo();
                                                        foreach ($sexo as $index => $valor) {
                                                            echo "<option value=" . $valor["idSexo"] . ">" . $valor["Sexo"] . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6-lg col-xl-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Estado Civil</label>
                                                    <select class="form-control" name="estadoCivil" id="estadoCivil">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6-lg col-xl-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Tipo de Identificacion</label>
                                                    <div class="input-group">
                                                        <select class="form-control" name="tipoIdentificacion" id="tipoIdentificacion">
                                                            <?php
                                                            $tipoIdentificacion = EmployeeController::listarTipoIdentificacion();
                                                            foreach ($tipoIdentificacion as $index => $valor) {
                                                                echo "<option value=" . $valor["idTipoIdentificacion"] . ">" . $valor["TipoIdentificacion"] . "</option>";
                                                            }
                                                            ?>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6-lg col-xl-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Identificacion</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="identificacion" placeholder="Ingrese el numero de ducumento" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6-lg col-xl-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Telefono fijo</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="telefono" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" inputmode="text" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6-lg col-xl-6 col-sm-12">
                                                <div class="form-group">
                                                    <label>Celular</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-mobile"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="celular" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" inputmode="text" required>
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
                                                        <input type="email" class="form-control" name="correo">
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
                                                        <input type="text" class="form-control" name="fechaNacimiento" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="datosempresa" role="tabpanel" aria-labelledby="datosempresa-tab">
                                        <div class="row">
                                            <div class="col-6-lg col-xl-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="">Centro de operación</label>
                                                    <select class="form-control" name="centro" required>
                                                        <?php
                                                        $centro = EmployeeController::listarCentro();
                                                        foreach ($centro as $index => $valor) {
                                                            echo "<option value=" . $valor["idCentro"] . ">" . $valor["Centro"] . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6-lg col-xl-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="">Departamento</label>
                                                    <select class="form-control" name="departamento" id="departamento" required>
                                                        <?php
                                                        $departamento = EmployeeController::listarDepartamento();
                                                        foreach ($departamento as $index => $valor) {
                                                            echo "<option value=" . $valor["idDepartamento"] . ">" . $valor["Departamento"] . "</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6-lg col-xl-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="">Puesto de trabajo</label>
                                                    <select class="form-control" name="puestoTrabajo" id="puestoTrabajo" required>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6-lg col-xl-6 col-sm-12">
                                                <div class="form-group">
                                                    <label for="">Fecha de Ingreso</label>
                                                    <input type="text" class="form-control" name="fechaIngreso" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric" required>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info">Save changes</button>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- END MODAL -->
<!-- SCRIPT PERSONAL -->
<script src="views/assets/js/empleado.js"></script>
<!-- END PERSONAL -->
<link rel="stylesheet" href="views/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="views/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="views/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- DataTables  & Plugins -->
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
<!-- <script src="views/assets/dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="views/assets/dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
    $(function() {
        $("#empleados").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "info": true,
            "paging": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#empleados_wrapper  .col-md-6:eq(0)');
    });
</script>