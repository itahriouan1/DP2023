<?php

namespace src;

class Lecteur {
    protected State $state;

    public function __construct(){
        $initialState = new PauseState();
        $this->state = $initialState;
        $initialState->setLecteur($this);
        
    }
    public function changeState(State $newState){
        $this->state = $newState;
        $newState->setLecteur($this);
    }

    public function Read(){
        $this->state->Read();
    }
    public function Speed(){
        $this->state->Speed();
    }


    /**
     * Get the value of state
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */ 
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }
}