<?php
var_dump($_GET);

$controller = '';
$method = '';

if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
}
if(isset($_GET['method'])){
    $method = $_GET['method'];
}

$class = false;

switch ($controller){
    case 'bieren':
        include_once 'Classes/Bieren.php';
        $class = new Bieren();
        break;
}

if ($class) {
    switch ($method){
    case 'overview':
        $class->Overview();
        break;
    case 'insert':
        $class->Insert();
        break;
    case 'delete':
        $class->Delete();
        break;
    case 'update':
        $class->Update();
        break;
    }
}

?>