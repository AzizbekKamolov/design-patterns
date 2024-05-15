<?php
include_once('Interfaces/CoffeeInterface.php');

class MochaCoffee implements CoffeeInterface
{
    public const SUGAR = 30; // sugar (gram)
    public const MILK = 160; // sugar (gram)
    public const BOILED_WATER = 10; // sugar (gram)

    public const COFFEE = 50;

    public function prepare(): string
    {
        return "Ingredients to make Mocha:"
            . self::MILK . " gram milk, "
            . self::SUGAR . " gram sugar, "
            . self::BOILED_WATER . " gram boiled water, "
            . self::COFFEE . " gram coffee;";
    }
}