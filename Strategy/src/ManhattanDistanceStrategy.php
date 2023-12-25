<?php

namespace src;

class ManhattanDistanceStrategy implements Strategy {
    public function Calculer(Point $P1, Point $P2) : float{
        return abs($P1->getX()-$P2->getX())+abs($P1->getY()-$P2->getY());
    }
}