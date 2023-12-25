<?php

class FakerFRCreator extends FakerCreator {
    public static function create()
    {
        $Faker = new FakerFR();
        $Faker->setFirstName();
        $Faker->setLastName();
        return $Faker;
    }
}