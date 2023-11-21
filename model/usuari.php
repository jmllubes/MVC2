<?php 

require_once "config/database.php";
class usuari{

    public $id;
    
    public $nom;
    public $cognom;
    public $correu;
    public $contrasenya;

    public $fecha;
    




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

    public function mostrarperid(){
        $connexio = database::connectar();
        $sql = "SELECT * FROM usuarios WHERE id = $this->id";
        $result = mysqli_query($connexio, $sql);
        return $result;
    }
    public function insertar(){
        $connexio = database::connectar();
        $sql = "INSERT INTO usuarios VALUES (null,'$this->nom','$this->cognom','$this->correu','$this->contrasenya')";
        $result = mysqli_query($connexio, $sql);
        return $result;
    }

    public function actualitzar(){
        $connexio = database::connectar();
        $sql = "UPDATE usuarios SET nombre = '$this->nom', apellidos = '$this->cognom', email = '$this->correu', password = '$this->contrasenya' , fecha= '$this->fecha' WHERE id = $this->id";
        $result = mysqli_query($connexio, $sql);
        return $result;
    }

    public function eliminar(){
        $connexio = database::connectar();
        $sql = "DELETE FROM usuarios WHERE id = $this->id";
        $result = mysqli_query($connexio, $sql);
        return $result;
    }





    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }
}




?>