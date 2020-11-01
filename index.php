<?php

require_once "Controllers/TemplateController.php";
require_once "Controllers/UserController.php";
require_once "Controllers/employeeController.php";

require_once "Models/EmployeeModel.php";
require_once "Models/UserModel.php";


$template = new TemplateController();
$template->template();