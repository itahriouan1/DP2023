<?php

namespace src;

class RalentiState extends AbstractLecteurState {
       

    public function Read(){
        $newState = new PauseState();
        $this->Lecteur->changeState($newState);

    }
    public function Speed(){
        $newState = new LectureState();
        $this->Lecteur->changeState($newState);

    }

}