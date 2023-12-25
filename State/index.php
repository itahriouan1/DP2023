<?php

use src\Lecteur;
use src\PauseState;

require 'vendor/autoload.php';


$lecteur = new Lecteur();
$lecteur->Read();
$lecteur->Speed();
$lecteur->Read();

var_dump($lecteur->getState());