<?php
include_once('Creator.php');
class ConcreteCreator1 extends Creator
{

    #[\Override] public function factoryMethod(): ProductInterface
    {
        return new ConcreteProduct1();
    }
}