<?php

use example2\src\CoffeeFactory;
use example2\src\Enums\CoffeeTypeEnum;

include ('src/Enums/CoffeeTypeEnum.php');
include ('src/CoffeeFactory.php');


$coffeeFactory = new CoffeeFactory();
if (isset($_REQUEST['type'])){
    $newCoffee = $coffeeFactory->makeCoffee(CoffeeTypeEnum::from($_REQUEST['type']));
}else{
    $newCoffee = $coffeeFactory->makeCoffee(CoffeeTypeEnum::AmericanoCoffee->name);
}
if ($newCoffee){
    print_r($newCoffee->prepare());
}
