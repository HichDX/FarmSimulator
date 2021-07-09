<?php


namespace FarmSimulator\Factory;


class Egg implements Product
{
    public function getProduct(): int
    {
        return rand(0, 1);
    }
}