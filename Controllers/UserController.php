<?php 

class UserController {

    static public function login() {

        if(isset($_POST["user"])) {

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["user"]) &&
			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])){
                
                $table = "usuario";
                $item = "usuario";
                $value = $_POST["user"];

                $resquest = UserModel::showUsers($table, $item, $value);
                

                if($resquest["usuario"] == $_POST["user"] && $resquest["clave"] == $_POST["password"]) {

                    $_SESSION['iniciarSesion'] = true;
                    $_SESSION['idUsuario'] = $resquest["idUsuario"];
                    $_SESSION['nombre'] = true;
                    $_SESSION['usuario'] = $_POST["user"];
                    echo '<script>

								window.location = "clientes";

						</script>';
                    
                } else {
					echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
                }
            }
        }else{
            echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
        }
    }

    static public function registrarUsuario() {

        if(isset($_POST["nombre"])) {
            if(
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["usuario"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["clave"]) &&
                preg_match('/^[0-9]+$/', $_POST["idEmpleado"]) &&
                preg_match('/^[0-9]+$/', $_POST["idEstado"])){

                $datos = array("usuario"=>$_POST["usuario"],
                                "clave"=>$_POST["clave"],
                                "idEmpleado"=>$_POST["idEmpleado"],
                                "idEstado"=>$_POST["idEstado"]);
            }
        }
    }
}