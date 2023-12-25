<?php

class FakerFactory {

    public static function create(string $langue) :Faker
    {
        if($langue == 'fr'){
            $Faker = FakerFRCreator::create();
        }
        if($langue == 'ar'){
            $Faker = FakerARCreator::create();
        }
        return $Faker;
    }
}