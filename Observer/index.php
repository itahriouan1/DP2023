<?php

use src\AdvertisersObserver;
use src\FollowerObserver;
use src\Influencer;

require 'vendor/autoload.php';

$Inf = new Influencer();
$obs1 = new FollowerObserver();
$Inf->addObserver($obs1);

$obs2 = new AdvertisersObserver();
$Inf->addObserver($obs2);

$Inf->sharePhoto();

$Inf->sharePhoto();
