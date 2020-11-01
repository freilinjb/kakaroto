<?php

require_once "../Controllers/employeeController.php";
require_once "../Models/EmployeeModel.php";

class EmpleadoAjax
{
    public $idSexo;
    public $idDepartamento;

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
}

/*=============================================
CONSEGUIR LISTA DE ESTADOS CIVILES POR SEXO
=============================================*/
if (isset($_POST["idSexo"]) && count($_POST) == 1) {

    $categoria = new EstadoCivilAjax();
    $categoria->idSexo = $_POST["idSexo"];
    $categoria->listarEstadosCiviles();
}

/*=============================================
CONSEGUIR LISTA DE PUESTOS DE TRABAJO POR DEPARTAMENTO
=============================================*/ 
else if (isset($_POST["idDepartamento"]) && count($_POST) == 1) {

    $departamento = new PuestroTrabajoAjax();
    $departamento->idDepartamento = $_POST["idDepartamento"];
    $departamento->listarPuestroTrabajo();
    
} else if (isset($_POST["nombre"])) {
    echo count($_POST);
    print_r($_POST);
}
