<?php

class Speedometer
{
    private const convertKmToMiles = 0.621;
    private const convertMilesToKm = 1;

    public static function convertKmToMiles(int $kmToMiles)
    {     
        return $kmToMiles * self::convertKmToMiles;
    }

    public static function convertMilesToKm(int $milesToKm)
    {     
        return $kmToMiles * self::convertMilesToKm;
    }
}