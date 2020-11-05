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
                    $_SESSION['idUsuario'] = true;
                    $_SESSION['nombre'] = true;
                    $_SESSION['usuario'] = true;
                    $_SESSION[''] = true;
                    $_SESSION['iniciarSesion'] = true;
                    echo "bien hecho";
                } else {
					echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
                }
            }
        }
    }
}