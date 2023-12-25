<?php

class FakerFR extends Faker {

    

    public function setFirstName()
    {
        $FirstNames  = ["John", "marie", "Bob", "alice"];        
        $this->FirstName = $this->RandomFromTable($FirstNames);
        
    }
    public function setLastName()
    {
        $LastNames  = ["Macron", "Dubois", "Cauchois", "blanc"];        
        $this->LastName = $this->RandomFromTable($LastNames);
        
    }
}