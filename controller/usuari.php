<?php 
require_once 'model/usuari.php';

class usuariController{

    public function mostrartot(){
        $usuari = new usuari();
        $usuaris = $usuari->mostrar();
        require_once "views/usuari/mostrar.php";
    }

    public function insertar(){
        require_once "views/usuari/insertar.php";
    }

}