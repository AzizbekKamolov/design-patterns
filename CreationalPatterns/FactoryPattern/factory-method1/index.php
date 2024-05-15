<?php

include_once('ConcreteCreator1.php');
include_once('ConcreteCreator2.php');
include_once('ConcreteProduct1.php');
include_once('ConcreteProduct2.php');


$creator1 = new ConcreteCreator1();
$product1 = $creator1->someOperation();


$creator2 = new ConcreteCreator2();
$product2 = $creator2->someOperation();

print_r($product1);
print_r($product2);
























