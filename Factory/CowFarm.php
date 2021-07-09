<?php


namespace FarmSimulator\Factory;

class CowFarm implements GUIFarm
{
    public function createAnimal()
    {
        return new CowAnimal();
    }
}