<?php

namespace example2\src;

use example2\src\Interfaces\CoffeeInterface;

include_once('Interfaces/CoffeeInterface.php');

class EspressoCoffee implements CoffeeInterface
{
    public const SUGAR = 30; // sugar (gram)
    public const MILK = 150; // sugar (gram)
    public const BOILED_WATER = 20; // sugar (gram)
    public const COFFEE = 50;

    public function prepare(): string
    {
        return "Ingredients to make Espresso:"
            . self::MILK . " gram milk, "
            . self::SUGAR . " gram sugar, "
            . self::BOILED_WATER . " gram boiled water "
            . self::COFFEE . " gram coffee;";
    }
}