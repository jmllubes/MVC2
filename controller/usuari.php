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

    public function actualitzar(){
        $usuari = new usuari();
        $usuari->setId($_GET["id"]);
        $resultat = $usuari->mostrarperid();
        $row = $resultat->fetch_assoc();
        require_once "views/usuari/actualitzar.php";
    }

    public function modificar(){
        $usuari = new usuari();
        $usuari->setId($_POST["id"]);
        $usuari->setNom($_POST["nom"]);
        $usuari->setCognom($_POST["cognoms"]);
        $usuari->setCorreu($_POST["email"]);
        $usuari->setContrasenya($_POST["password"]);
        $usuari->setFecha($_POST["fecha"]);
        $usuari->actualitzar();
        header("Location: index.php?controller=usuari&action=mostrartot");
    }

    public function eliminar(){
        $usuari = new usuari();
        $usuari->setId($_GET["id"]);
        $usuari->eliminar();
        header("Location: index.php?controller=usuari&action=mostrartot");
    }

}