<?php


namespace FarmSimulator\Factory;

abstract class Animal
{
    static $id = 1;
    public $idAnimal = 0;
    public abstract function makeProduct(): Product;
    public abstract function getNameAnimal();
    public function takeProduct()
    {
        $product = $this->makeProduct();
        return $product->getProduct();
    }
}