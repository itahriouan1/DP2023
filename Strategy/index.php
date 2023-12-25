<?php

use src\Distance;
use src\EuclidienDistanceStrategy;
use src\ManhattanDistanceStrategy;
use src\Point;

require 'vendor/autoload.php';


$Distance = new Distance();

$strategy = new ManhattanDistanceStrategy();

$Distance->setStrategy($strategy);

$P1 = new Point(3,4);
$P2 = new Point(4,5);

echo($Distance->Calculer($P1, $P2));

