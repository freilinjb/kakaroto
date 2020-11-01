<?php 

require_once "Conection.php";


class UserModel {

    static public function showUsers($table, $item, $value) {
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
}