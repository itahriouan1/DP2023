<?php

class FakerARCreator extends FakerCreator {
    public static function create()
    {
        $Faker = new FakerAR();
        $Faker->setFirstName();
        $Faker->setLastName();
        return $Faker;
    }
}