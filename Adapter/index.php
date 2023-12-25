<?php

use src\ChevilleCarree;
use src\ChevilleCarreeAdapter;
use src\ChevilleRonde;
use src\TrouRond;

require 'vendor/autoload.php';

$chevilleRonde = new ChevilleRonde(5);

$trouRond = new TrouRond(5);

$chevilleCarree = new ChevilleCarree(7);

$chevilleCarreeAdapte = new ChevilleCarreeAdapter($chevilleCarree);

var_dump($trouRond->Correspond($chevilleCarreeAdapte));