<?php
class ConcreteCreator2 extends Creator
{

    #[\Override] public function factoryMethod(): ProductInterface
    {
        return new ConcreteProduct2();
    }
}