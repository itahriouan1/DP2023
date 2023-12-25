<?php

namespace src;

class EuclidienDistanceStrategy implements Strategy {
    public function Calculer(Point $P1, Point $P2): float {
        return sqrt(pow($P1->getX()-$P2->getX(), 2)+(pow($P1->getY()-$P2->getY(), 2)));
    }
}