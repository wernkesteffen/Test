<?php
require_once 'inc/functions.inc.php';
require_once 'src/Entities/Buch.php';
require_once 'src/Controllers/AbstractBase.php';
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controllerName = ucfirst($controller).'Controller';
$controllerFile = 'src/Controllers/'.$controllerName.'.php';
if(file_exists($controllerFile)){
    require_once $controllerFile; 
    $requestController = new $controllerName();
    $requestController->run($action);
}
?>