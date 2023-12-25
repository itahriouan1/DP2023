<?php

namespace src;

class Distance {

    protected Strategy $strategy;

    


    public function Calculer(Point $P1, Point $P2) : float
    {
        return $this->strategy->Calculer($P1, $P2);
    }

    /**
     * Set the value of strategy
     *
     * @return  self
     */ 
    public function setStrategy($strategy)
    {
        $this->strategy = $strategy;

        return $this;
    }
}