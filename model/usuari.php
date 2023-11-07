<?php 

require_once "config/database.php";
class usuari{

    public $nom;
    public $cognom;
    public $correu;
    public $contrasenya;
    




    /**
     * Get the value of contrasenya
     */ 
    public function getContrasenya()
    {
        return $this->contrasenya;
    }

    /**
     * Set the value of contrasenya
     *
     * @return  self
     */ 
    public function setContrasenya($contrasenya)
    {
        $this->contrasenya = $contrasenya;

        return $this;
    }

    /**
     * Get the value of correu
     */ 
    public function getCorreu()
    {
        return $this->correu;
    }

    /**
     * Set the value of correu
     *
     * @return  self
     */ 
    public function setCorreu($correu)
    {
        $this->correu = $correu;

        return $this;
    }

    /**
     * Get the value of cognom
     */ 
    public function getCognom()
    {
        return $this->cognom;
    }

    /**
     * Set the value of cognom
     *
     * @return  self
     */ 
    public function setCognom($cognom)
    {
        $this->cognom = $cognom;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function mostrar(){
        $connexio = database::connectar();
        $sql = "SELECT * FROM usuarios";
        $result = mysqli_query($connexio, $sql);
        return $result;
    }




}




?>