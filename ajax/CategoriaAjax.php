<?php

require_once "../Models/CategoriaModel.php";

class CategoriaAjax
{
    public $idEmpleado;
    public $idSexo;
    public $idDepartamento;
    public $datosEmpleado;

    public function registrarCategoria()
    {

        $datos = array(
            "creado_por" => 1,
            "nombre" => $_POST["nombre"],
            "estado" => $_POST["estado"],
        );


        $respuesta  = CategoriaModel::registrarCategoria($datos);

        // print_r($respuesta);die;
        // echo "registrado";
        echo json_encode($respuesta);
    }

    public function actualizandoCategoria()
    {

        $datos = array(
            "idCategoria" => $_POST["idCategoria"],
            "creado_por" => 1,
            "nombre" => $_POST["nombre"],
            "estado" => $_POST["estado"],
        );


        $respuesta  = CategoriaModel::registrarCategoria($datos);

        // print_r($respuesta);die;
        // echo "registrado";
        echo json_encode($respuesta);
    }

    public function getCategoria()
    {

        $idCategoria = $_POST['idCategoria'];
        $respuesta  = CategoriaModel::getCategoria($idCategoria);

        echo json_encode($respuesta);
    }

    public function eliminarEmpleado()
    {
        if (preg_match('/^[0-9]+$/', $_POST['idEmpleado'])) {
            $idEmpleado = $_POST['idEmpleado'];
            // echo "idEmpleado; " . $idEmpleado;die;
            $respuesta  = EmpleadoModel::eliminarEmpleado($idEmpleado);

            echo json_encode($respuesta);
        } else {
            $datos = array("msg" => "Solo se admiten numeros", "status" => 200);
            echo json_encode($datos);
        }
    }
}



/*=============================================
Comprobamos que el valor no venga vacío
=============================================*/
if (isset($_POST['exec']) && !empty($_POST['exec'])) {
    $funcion = $_POST['exec'];
    $ejecutar = new CategoriaAjax();
    //En función del parámetro que nos llegue ejecutamos una función u otra
    switch ($funcion) {

        case 'registrarCategoria':
            $ejecutar->registrarCategoria();
            // echo "hola mundo";
            break;

        case 'registrarProveedor':
            $ejecutar->registrarCategoria();
            // echo "hola mundo";
            break;

        case 'actualizandoCategoria':
            $ejecutar->actualizandoCategoria();
            // echo "hola mundo";
            break;

        case 'getCategoria':
            $ejecutar->getCategoria();
            // echo "hola mundo";
            break;

        case 'eliminarEmpleado':
            $ejecutar->eliminarEmpleado();
            // echo "hola mundo";
            break;
        case 'funcion2':
            $b->accion2();
            break;
    }
}
