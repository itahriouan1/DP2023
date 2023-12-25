<?php

require 'Faker.php';
require 'FakerAR.php';
require 'FakerFR.php';
require 'FakerFactory.php';
require 'FakerCreator.php';
require 'FakerARcreator.php';
require 'FakerFRCreator.php';

$Faker1 = FakerFactory::create('fr');


var_dump($Faker1);