<?php

namespace src;

class ChevilleCarreeAdapter extends ChevilleRonde {
    protected ChevilleCarree $chevilleCarree;

    public function __construct(ChevilleCarree $chevilleCarree){
        $this->chevilleCarree = $chevilleCarree;
    }
    public function getRayon()
    {
        return sqrt(2*pow(($this->chevilleCarree->getCote()/2),2));
    }
}