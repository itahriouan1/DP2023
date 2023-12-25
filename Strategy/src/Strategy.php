<?php

namespace src;

interface Strategy {
    public function Calculer(Point $P1, Point $P2): float;
}