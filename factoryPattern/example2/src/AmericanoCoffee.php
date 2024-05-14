<?php
include_once ('Interfaces/CoffeeInterface.php');
class AmericanoCoffee implements CoffeeInterface
{
    public const SUGAR = 30; // sugar (gram)
    public const MILK = 120; // sugar (gram)
    public const BOILED_WATER = 50; // sugar (gram)
    public function prepare():string
    {
        return "Ingredients to make Americano:"
            . self::MILK . " gram milk, "
            . self::SUGAR . " gram sugar, "
            . self::BOILED_WATER . " gram boiled water;";
    }
}