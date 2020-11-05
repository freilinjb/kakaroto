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

    static public function registrarEmpleado($datos) {

        $request = Conection::connect()->prepare("CALL registrarEmpleado(NULL,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        print_r($datos);

        $request->bindParam("1", $datos["nombre"], PDO::PARAM_STR);
		$request->bindParam("2", $datos["apellido"], PDO::PARAM_INT);
		$request->bindParam("3", $datos["idSexo"], PDO::PARAM_INT);
		$request->bindParam("4", $datos["idEstadoCivil"], PDO::PARAM_INT);
		$request->bindParam("5", $datos["idTipoIdentificacion"], PDO::PARAM_INT);
		$request->bindParam("6", $datos["Identificacion"], PDO::PARAM_STR);
		$request->bindParam("7", $datos["correo"], PDO::PARAM_STR);
		$request->bindParam("8", $datos["telefono"], PDO::PARAM_STR);
		$request->bindParam("9", $datos["celular"], PDO::PARAM_STR);
		$request->bindParam("10", $datos["idCentro"], PDO::PARAM_INT);
		$request->bindParam("11", $datos["idDepartamento"], PDO::PARAM_INT);
		$request->bindParam("12", $datos["idPuestoTrabajo"], PDO::PARAM_INT);
		$request->bindParam("13", $datos["fechaNacimiento"], PDO::PARAM_STR);
        
        print_r($request);
        $request->execute();

        return $request-> fetchAll();
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