<?php

abstract class Faker {
    protected string $FirstName;
    protected string $LastName;

    public abstract function setLastName();
    public abstract function setFirstName();

    public function RandomFromTable($table){
        $i = array_rand($table);
        return $table[$i];
    }
    
    

    /**
     * Get the value of FirstName
     */ 
    public function getFirstName()
    {
        return $this->FirstName;
    }

    
    
    

    /**
     * Get the value of LastName
     */ 
    public function getLastName()
    {
        return $this->LastName;
    }

    
    
    
} 