<?php 

class nota{

    public $nom;
    public $contingut;
    


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

    /**
     * Get the value of contingut
     */ 
    public function getContingut()
    {
        return $this->contingut;
    }

    /**
     * Set the value of contingut
     *
     * @return  self
     */ 
    public function setContingut($contingut)
    {
        $this->contingut = $contingut;

        return $this;
    }

    public function mostrar(){
        return "MOSTRAR NOTES";
    }
    public function insertar(){

    }
    public function actualitzar(){
        
    }




}