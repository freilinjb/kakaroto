<?php

require_once "../Controllers/employeeController.php";
require_once "../Models/EmployeeModel.php";

class EmpleadoAjax
{
    public $idEmpleado;
    public $idSexo;
    public $idDepartamento;
    public $datosEmpleado;

    public function listarEstadosCiviles()
    {

        $item = "idSexo";
        $valor = $this->idSexo;

        $respusta = EmployeeController::listarEstadoCiviles($item, $valor);
        echo json_encode($respusta);
    }

    public function listarPuestroTrabajo()
    {

        $item = "idDepartamento";
        $valor = $this->idDepartamento;

        $respusta = EmployeeController::listarPuestroTrabajo($item, $valor);
        echo json_encode($respusta);
    }

    public function registrarEmpleado() {
        $valor = $this->datosEmpleado;
        $respuesta  = EmployeeModel::registrarEmpleado($valor);

        echo json_encode($respuesta);
    }

    public function editarEmplado() {
        $valor = $this->datosEmpleado;
        $respuesta  = EmployeeModel::actualizarEmpleado($valor);

        echo json_encode($respuesta);
    }

    public function consultarEmpleado() {
        $item = "idEmpleado";
        $valor = $this->idEmpleado;

        $respuesta = EmployeeController::showEmployee($item, $valor);

        echo json_encode($respuesta);
    }
}

/*=============================================
CONSEGUIR LISTA DE ESTADOS CIVILES POR SEXO
=============================================*/
if (isset($_POST["idSexo"]) && count($_POST) == 1) {

    $categoria = new EmpleadoAjax();
    $categoria->idSexo = $_POST["idSexo"];
    $categoria->listarEstadosCiviles();
}

/*=============================================
CONSEGUIR LISTA DE PUESTOS DE TRABAJO POR DEPARTAMENTO
=============================================*/ 
if (isset($_POST["idDepartamento"]) && count($_POST) == 1) {
    echo "asdf323adf323";

    $departamento = new EmpleadoAjax();
    $departamento->idDepartamento = $_POST["idDepartamento"];
    $departamento->listarPuestroTrabajo();
    
} 

if (isset($_POST["nombre"]) && !isset($_POST["idEmpleado"])) {
    $empleado = new EmpleadoAjax();

    $datos = array("nombre"=>$_POST["nombre"],
                                "apellido"=>$_POST["apellido"],
                                "idSexo"=>$_POST["idSexo"],
                                "idEstadoCivil"=>$_POST["idEstadoCivil"],
                                "idTipoIdentificacion"=>$_POST["idTipoIdentificacion"],
                                "Identificacion"=>$_POST["Identificacion"],
                                "telefono"=>$_POST["telefono"],
                                "celular"=>$_POST["celular"],
                                "correo"=>$_POST["correo"],
                                "fechaNacimiento"=>$_POST["fechaNacimiento"],
                                "idCentro"=>$_POST["idCentro"],
                                "idDepartamento"=>$_POST["idDepartamento"],
                                "idPuestoTrabajo"=>$_POST["idPuestoTrabajo"],
                                "fechaIngreso"=>$_POST["fechaIngreso"]);

    $empleado->datosEmpleado = $datos;
    $empleado->registrarEmpleado();

}

if(isset($_POST['idEmpleado']) && count($_POST) == 1) {

    $empleado = new EmpleadoAjax();
    $empleado->idEmpleado = $_POST['idEmpleado'];
    $empleado->consultarEmpleado();
    
}


if(isset($_POST['idEmpleado']) && count($_POST) > 1) {

    $empleado = new EmpleadoAjax();
    $datos = array("idEmpleado"=>$_POST["idEmpleado"],
                                "nombre"=>$_POST["nombre"],
                                "apellido"=>$_POST["apellido"],
                                "idSexo"=>$_POST["idSexo"],
                                "idEstadoCivil"=>$_POST["idEstadoCivil"],
                                "idTipoIdentificacion"=>$_POST["idTipoIdentificacion"],
                                "Identificacion"=>$_POST["Identificacion"],
                                "telefono"=>$_POST["telefono"],
                                "celular"=>$_POST["celular"],
                                "correo"=>$_POST["correo"],
                                "fechaNacimiento"=>$_POST["fechaNacimiento"],
                                "idCentro"=>$_POST["idCentro"],
                                "idDepartamento"=>$_POST["idDepartamento"],
                                "idPuestoTrabajo"=>$_POST["idPuestoTrabajo"],
                                "fechaIngreso"=>$_POST["fechaIngreso"]);

    $empleado->datosEmpleado = $datos;
    $empleado->editarEmplado();
    
}
