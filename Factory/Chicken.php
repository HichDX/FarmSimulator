<?php


namespace FarmSimulator\Factory;

class Chicken extends Animal
{
    public function __construct()
    {
        $this->idAnimal = parent::$id++;
    }

    public function makeProduct(): Product
    {
        return new Egg();
    }

    public function getNameAnimal()
    {
        return 'Chicken';
    }
}