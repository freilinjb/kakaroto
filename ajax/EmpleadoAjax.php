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

    public function registrarEmpleado()
    {
        $valor = $this->datosEmpleado;
        $empleado = new EmpleadoAjax();

    $datos = array(
        "nombre" => $_POST["nombre"],
        "apellido" => $_POST["apellido"],
        "idSexo" => $_POST["idSexo"],
        "idEstadoCivil" => $_POST["idEstadoCivil"],
        "idTipoIdentificacion" => $_POST["idTipoIdentificacion"],
        "Identificacion" => $_POST["Identificacion"],
        "telefono" => $_POST["telefono"],
        "celular" => $_POST["celular"],
        "correo" => $_POST["correo"],
        "fechaNacimiento" => $_POST["fechaNacimiento"],
        "idCentro" => $_POST["idCentro"],
        "idDepartamento" => $_POST["idDepartamento"],
        "idPuestoTrabajo" => $_POST["idPuestoTrabajo"],
        "fechaIngreso" => $_POST["fechaIngreso"],
        );

        // $empleado->datosEmpleado = $datos;
        // $empleado->registrarEmpleado();
        $respuesta  = EmployeeModel::registrarEmpleado($valor);

        echo json_encode($respuesta);
    }

    public function editarEmplado()
    {
        $valor = $this->datosEmpleado;
        $respuesta  = EmployeeModel::actualizarEmpleado($valor);

        echo json_encode($respuesta);
    }

    public function consultarEmpleado()
    {
        $item = "idEmpleado";
        $valor = $this->idEmpleado;

        $respuesta = EmployeeController::showEmployee($item, $valor);

        echo json_encode($respuesta);
    }
}



/*=============================================
Comprobamos que el valor no venga vacío
=============================================*/	
if(isset($_POST['exec']) && !empty($_POST['exec'])) {
    $funcion = $_POST['exec'];
    $ejecutar = new EmpleadoAjax();
    //En función del parámetro que nos llegue ejecutamos una función u otra
    switch($funcion) {

        case 'registrarEmpleado': 
            $ejecutar -> registrarEmpleado();
            break;
        case 'funcion2': 
            $b -> accion2();
            break;
    }
}
