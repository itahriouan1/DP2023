<?php

namespace src;

class TrouRond {
    protected float $Rayon;

    public function __construct(float $Rayon){
        $this->Rayon = $Rayon;
    }

    public function Correspond($chevilleRonde){
        if($this->Rayon >= $chevilleRonde->getRayon()){
            return true;
        }
        else {
            return false;
        }
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