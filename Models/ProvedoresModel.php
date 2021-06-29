<?php

require "Conection.php";

class ProvedoresModel
{


  static public function showProvedores($table, $item, $value)
  {
    $data = null;
    if ($item != null) {
      $data = Conection::connect()->prepare("SELECT * FROM $table WHERE $item = :$item");
      $data->bindParam(":" . $item, $value, PDO::PARAM_STR);
      $data->execute();
      return $data->fetch();
    } else {
      $data = Conection::connect()->prepare("SELECT * FROM $table");
      $data->execute();

      return $data->fetchAll();
    }
    $data = null;
  }

  static public function registrarProvedores($datos)
  {

    $request = Conection::connect()->prepare("CALL addProveedor(NULL,?,?,?,?,?,?,?,?,?,?)");

    $request->bindParam("1", $datos["nombre"], PDO::PARAM_STR);
    $request->bindParam("2", $datos["RNC"], PDO::PARAM_STR);
    $request->bindParam("3", $datos["correo"], PDO::PARAM_INT);
    $request->bindParam("4", $datos["telefono"], PDO::PARAM_INT);
    $request->bindParam("5", $datos["idProvincia"], PDO::PARAM_INT);
    $request->bindParam("6", $datos["idCiudad"], PDO::PARAM_STR);
    $request->bindParam("7", $datos["direccion"], PDO::PARAM_STR);
    $request->bindParam("8", $datos["observacion"], PDO::PARAM_STR);
    $request->bindParam("9", $datos["estado"], PDO::PARAM_STR);


    $request->execute();

    return $request->fetchAll();
  }

  static public function actualizarEmpleado($datos)
  {

    $request = Conection::connect()->prepare("CALL addProveedor(NULL,?,?,?,?,?,?,?,?,?,?)");

    $request->bindParam("1", $datos["nombre"], PDO::PARAM_STR);
    $request->bindParam("2", $datos["RNC"], PDO::PARAM_STR);
    $request->bindParam("3", $datos["correo"], PDO::PARAM_INT);
    $request->bindParam("4", $datos["telefono"], PDO::PARAM_INT);
    $request->bindParam("5", $datos["idProvincia"], PDO::PARAM_INT);
    $request->bindParam("6", $datos["idCiudad"], PDO::PARAM_STR);
    $request->bindParam("7", $datos["direccion"], PDO::PARAM_STR);
    $request->bindParam("8", $datos["observacion"], PDO::PARAM_STR);
    $request->bindParam("9", $datos["estado"], PDO::PARAM_STR);

    $request->execute();

    return $request->fetchAll();
  }

  static public function listarEstadoCiviles($tabla, $item, $valor)
  {

    $data = Conection::connect()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
    $data->bindParam(":" . $item, $valor, PDO::PARAM_STR);
    $data->execute();
    return $data->fetchAll();
  }

  static public function listarPuestroTrabajo($tabla, $item, $valor)
  {

    $data = Conection::connect()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
    $data->bindParam(":" . $item, $valor, PDO::PARAM_STR);
    $data->execute();
    return $data->fetchAll();
  }

  static public function listarSexo($table)
  {

    $data = Conection::connect()->prepare("SELECT * FROM $table");
    $data->execute();
    return $data->fetchAll();
  }

  static public function listarTipoIdentificacion($table)
  {

    $data = Conection::connect()->prepare("SELECT * FROM $table");
    $data->execute();
    return $data->fetchAll();
  }

  static public function listarCentro($table)
  {

    $data = Conection::connect()->prepare("SELECT * FROM $table");
    $data->execute();
    return $data->fetchAll();
  }

  static public function listarDepartamento($table)
  {

    $data = Conection::connect()->prepare("SELECT * FROM $table");
    $data->execute();
    return $data->fetchAll();
  }
}
