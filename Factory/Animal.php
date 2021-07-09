<?php


namespace FarmSimulator\Factory;

abstract class Animal
{
    static $id = 1;
    public $idAnimal = 0;
    public abstract function getProduct();
    public abstract function getNameAnimal();
}