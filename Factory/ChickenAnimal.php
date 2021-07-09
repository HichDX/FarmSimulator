<?php


namespace FarmSimulator\Factory;

class ChickenAnimal extends Animal
{
    public function __construct()
    {
        $this->idAnimal = parent::$id++;
    }

    //Курица дает яйца
    public function getProduct()
    {
        return rand(0, 1);
    }

    public function getNameAnimal()
    {
        return "Chicken";
    }
}