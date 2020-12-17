<?php

require_once "Controllers/TemplateController.php";
require_once "Controllers/UserController.php";
require_once "Controllers/employeeController.php";
require_once "Controllers/PruebaCrack.php";
require_once "Controllers/ProductoController.php";

require_once "Controllers/DesarrolloProductosController.php";


require_once "Controllers/EstandarController.php";
require_once "Controllers/OperacionesController.php";


require_once "Models/EmployeeModel.php";
require_once "Models/UserModel.php";
require_once "Models/PruebaModel.php";
require_once "Models/ProductoModel.php";

require_once "Models/DesarrolloProductosModel.php";

require_once "Models/EstandarModel.php";
require_once "Models/OperacionesModel.php";


$template = new TemplateController();
$template->template();
