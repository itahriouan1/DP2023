<?php

namespace src;

abstract class AbstractLecteurState implements State {
    public abstract function Read();
    public abstract function Speed();

    protected $Lecteur;


    /**
     * Get the value of Lecteur
     */ 
    public function getLecteur()
    {
        return $this->Lecteur;
    }

    /**
     * Set the value of Lecteur
     *
     * @return  self
     */ 
    public function setLecteur($Lecteur)
    {
        $this->Lecteur = $Lecteur;

        return $this;
    }
}