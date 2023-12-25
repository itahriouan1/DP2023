<?php

namespace src;

class ChevilleRonde {
    protected float $Rayon;

    public function __construct(float $Rayon){
        $this->Rayon = $Rayon;
    }

    /**
     * Get the value of Rayon
     */ 
    public function getRayon()
    {
        return $this->Rayon;
    }

    /**
     * Set the value of Rayon
     *
     * @return  self
     */ 
    public function setRayon($Rayon)
    {
        $this->Rayon = $Rayon;

        return $this;
    }
}