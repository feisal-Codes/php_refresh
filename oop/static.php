
<?php


class Weather
{

    public static $tempConditions = ["Mild" => "NIce day to go the park", "Cold" => "Better carry a sweater", "Sunny" => "Wear Light"];

    public static function getCondition()
    {

        $key = array_rand(self::$tempConditions);
        return self::$tempConditions[$key];
    }
}

echo Weather::getCondition();
