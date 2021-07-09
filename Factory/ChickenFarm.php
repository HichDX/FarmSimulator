<?php


namespace FarmSimulator\Factory;

class ChickenFarm implements GUIFarm
{
    public function createAnimal()
    {
        return new ChickenAnimal();
    }
}