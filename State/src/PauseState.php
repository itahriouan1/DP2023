<?php

namespace src;

class PauseState extends AbstractLecteurState {
   

    public function Read(){
        $newState = new LectureState();
        $this->Lecteur->changeState($newState);

    }
    public function Speed(){

    }

}