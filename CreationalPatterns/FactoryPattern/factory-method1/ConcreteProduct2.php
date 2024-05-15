<?php
class ConcreteProduct2 implements ProductInterface
{

    #[\Override] public function execute(): string
    {
        return  " [result of ConcreteProduct2]<br>";
    }
}