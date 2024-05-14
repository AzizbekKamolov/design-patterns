<?php
include_once('Enums/CoffeeTypeEnum.php');
include_once('AmericanoCoffee.php');
include_once('CappuccinoCoffee.php');
include_once('EspressoCoffee.php');
include_once('MochaCoffee.php');
class CoffeeFactory
{
    public function makeCoffee(string $type):CoffeeInterface|bool
    {
        if ($type){
            return new $type();
        }
        echo "Invalid coffee type";
        return false;
    }
}