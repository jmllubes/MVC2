<h1>Benviguts</h1>

<?php 

require_once "controller/usuari.php";
require_once "controller/nota.php";

if(isset($_GET["controller"]) && class_exists($_GET["controller"]) ){
    $nomcontroller = $_GET["controller"] . "Controller";
    $controller = new $nomcontroller();

    if(isset($_GET["action"]) && method_exists($controller,$_GET["action"])){
        $action = $_GET["action"];
        $controller->$action();
    }
    else{
        echo $_GET["action"] . " no existeix aquest metode";
    }
}
else{
    
    echo $_GET["controller"] .  " no existeix el controlador";
}