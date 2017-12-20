<?php

require 'Country.php';
require 'State.php';

class CountryRepository{

    private static $countries = array();

    protected static function init(){
        $countries = array();

        array_push($countries,
            new Country('Austria','at',array(
                new States('Styria'), new States('Vienna')
        )));

        array_push($countries,
        new Country('Canada','ca',array(
            new States('Ontario'), new States('Quebec')
        )));

        array_push($countries,
        new Country('Luxemberg','lu'));  
        
        self::$countries = $countries;
    }

    public static function getCountries(){

        if(count(self::countries) === 0){
            self::init();
        }
        return self::$countries;
    }
}