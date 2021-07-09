<?php


namespace FarmSimulator\Factory;


class Milk implements Product
{
    public function getProduct(): int
    {
        return rand(8, 12);
    }
}