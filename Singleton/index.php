<?php

require 'Singleton.php';

$singleton = Singleton::getInstance();

var_dump($singleton);

$singleton2 = clone($singleton);

var_dump($singleton2);
