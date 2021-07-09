<?php


namespace FarmSimulator\Factory;

class CowAnimal extends Animal
{
    public function __construct()
    {
        $this->idAnimal = parent::$id++;
    }

    //Корова дает молоко
    public function getProduct()
    {
        return rand(8, 12);
    }

    public function getNameAnimal()
    {
        return "Cow";
    }
}