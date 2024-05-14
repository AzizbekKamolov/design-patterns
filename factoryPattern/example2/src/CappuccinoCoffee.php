<?php
include_once ('Interfaces/CoffeeInterface.php');

class CappuccinoCoffee implements CoffeeInterface
{

    public const SUGAR = 25; // sugar (gram)
    public const MILK = 120; // sugar (gram)
    public const BOILED_WATER = 55; // sugar (gram)
    public function prepare():string
    {
        return "Ingredients to make Cappuccino:"
            . self::MILK . " gram milk, "
            . self::SUGAR . " gram sugar, "
            . self::BOILED_WATER . " gram boiled water;";
    }
}