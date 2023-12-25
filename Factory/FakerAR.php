<?php

class FakerAR extends Faker {

    public function setFirstName()
    {
        $FirstNames  = ["omar", "jalal", "ibrahim", "imane"];        
        $this->FirstName = $this->RandomFromTable($FirstNames);
        
    }
    public function setLastName()
    {
        $LastNames  = ["Alaoui", "Alami", "Berrada", "Sekkat"];        
        $this->LastName = $this->RandomFromTable($LastNames);
        
    }
}