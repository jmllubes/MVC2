<?php 
require_once "model/nota.php";
class notaController{

    public function llistar(){
        $nota = new nota();
        $nota->setNom("Base de dades");
        $nota->setContingut("Introducció a les bases de dades");
        require_once "views/nota/mostrar.php";
    }
    
}