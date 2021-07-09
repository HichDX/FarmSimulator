<?php


namespace FarmSimulator\Factory;

class Cow extends Animal
{
    public function __construct()
    {
        $this->idAnimal = parent::$id++;
    }

    public function makeProduct(): Product
    {
        return new Milk();
    }

    public function getNameAnimal()
    {
        return "Cow";
    }
}