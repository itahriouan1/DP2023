<?php

namespace src;

class LectureState extends AbstractLecteurState {
    

    public function Read(){
        $newState = new PauseState();
        $this->Lecteur->changeState($newState);
    }
    public function Speed(){
        $newState = new RalentiState();
        $this->Lecteur->changeState($newState);
    }


}