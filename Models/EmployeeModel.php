<?php
 
 require "Conection.php";

class EmployeeModel {

    static public function showEmployee($table, $item, $value) {
        if($item != null) {
			$data = Conection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
			$data -> bindParam(":".$item, $value, PDO::PARAM_STR);
			$data -> execute();
			return $data -> fetch();

		} else {
			$data = Conection::connect()->prepare("SELECT * FROM $table");
			$data -> execute();
			return $data -> fetchAll();
		}
    }

    static public function listarEstadoCiviles($tabla, $item, $valor) {

        $data = Conection::connect()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $data -> bindParam(":".$item, $valor, PDO::PARAM_STR);
        $data -> execute();
        return $data -> fetchAll();
    }

    static public function listarPuestroTrabajo($tabla, $item, $valor) {

        $data = Conection::connect()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $data -> bindParam(":".$item, $valor, PDO::PARAM_STR);
        $data -> execute();
        return $data -> fetchAll();
    }

    static public function listarSexo($table) {

        $data = Conection::connect()->prepare("SELECT * FROM $table");
        $data -> execute();
        return $data -> fetchAll();
    }

    static public function listarTipoIdentificacion($table) {

        $data = Conection::connect()->prepare("SELECT * FROM $table");
        $data -> execute();
        return $data -> fetchAll();
    }

    static public function listarCentro($table) {

        $data = Conection::connect()->prepare("SELECT * FROM $table");
        $data -> execute();
        return $data -> fetchAll();
    }    

    static public function listarDepartamento($table) {

        $data = Conection::connect()->prepare("SELECT * FROM $table");
        $data -> execute();
        return $data -> fetchAll();
    }   
}