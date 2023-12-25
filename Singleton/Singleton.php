<?php

class Singleton {

    private static $singleton = null;

    private function __construct()
    {
        
    }

    private function __clone()
    {
        
    }

    public static function getInstance(){
        if (self::$singleton==null){
            self::$singleton = new Singleton();
        }

        return self::$singleton;
    }



}