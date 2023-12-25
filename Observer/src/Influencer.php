<?php

namespace src;

class Influencer extends Subject {
    protected int $id;

    public function sharePhoto(){
        echo '<br>Influencer shared a photo';
        $this->notifyObservers();
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
}