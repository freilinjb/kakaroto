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

    static public function listarSexo() {
        $tabla = "sexo";
        $respuesta = EmployeeModel::listarSexo($tabla);

        return $respuesta;
    }

}