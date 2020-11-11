<?php

class Speedometer 
{
    public $km = '';
    public $miles = '';
    public const CONVERTER = 1.61;

    public static function convertKmToMiles($km) 
    {
        return $km . 'km equals ' . number_format(($km/self::CONVERTER),2) . ' miles.';
    }

    public static function convertMilesToKm($miles)
    {
        return $miles .'miles equals ' . number_format(($miles*self::CONVERTER),2) . ' km.';
    }
}