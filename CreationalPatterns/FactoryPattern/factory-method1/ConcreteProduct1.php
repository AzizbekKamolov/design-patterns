<?php
include_once('ProductInterface.php');
class ConcreteProduct1 implements ProductInterface
{


    #[\Override] public function execute(): string
    {
        return " [result of ConcreteProduct1]<br>";
    }
}