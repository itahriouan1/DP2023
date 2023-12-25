<?php

namespace src;

class Subject {
    protected $Observers = [];

    public function addObserver(ObserverInterface $Observer){
        if(array_search($Observer, $this->Observers) == false){
            $this->Observers [] = $Observer;
        }
        //array_push($this->Observers, $Observer);
    }
    public function removeObserver(ObserverInterface $Observer){
        if($i = array_search($Observer, $this->Observers) == true){
            unset($this->Observers[$i]);
        }        
    }
    public function notifyObservers(){
        foreach($this->Observers as $Observer){
            $Observer->notify();
        }
    }
}