<?php

abstract class Creator
{
    abstract public function factoryMethod():ProductInterface;

    public function someOperation():string
    {
        return $this->factoryMethod()->execute();
    }
}