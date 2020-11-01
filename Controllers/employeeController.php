<?php

class EmployeeController {

    static public function showEmployee($item, $value) {
        $table = "empleados_v";
        $request = EmployeeModel::showEmployee($table, $item, $value);

        return $request;
    }

    static public function listarEstadoCiviles($item, $valor) {
        $tabla = "estadoCivil";
        $respuesta = EmployeeModel::listarEstadoCiviles($tabla, $item, $valor);

        return $respuesta;
    }

    static public function listarPuestroTrabajo($item, $valor) {
        $tabla = "puestotrabajo";
        $respuesta = EmployeeModel::listarPuestroTrabajo($tabla, $item, $valor);

        return $respuesta;
    }

    static public function listarSexo() {
        $tabla = "sexo";
        $respuesta = EmployeeModel::listarSexo($tabla);

        return $respuesta;
    }
    
    static public function listarTipoIdentificacion() {
        $tabla = "TipoIdentificacion";
        $respuesta = EmployeeModel::listarTipoIdentificacion($tabla);

        return $respuesta;
    }

    static public function listarCentro() {
        $tabla = "centro";
        $respuesta = EmployeeModel::listarCentro($tabla);

        return $respuesta;
    }

    static public function listarDepartamento() {
        $tabla = "departamento";
        $respuesta = EmployeeModel::listarDepartamento($tabla);

        return $respuesta;
    }

}