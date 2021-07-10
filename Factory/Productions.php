<?php


namespace FarmSimulator\Factory;


class Productions
{
    public function getMilk($barn)
    {
        $milk = 0;
        for ($i = 0; $i < count($barn); $i++) {
            if ($barn[$i]->getNameAnimal() === 'Cow')
                $milk += $barn[$i]->takeProduct();
        }
        return $milk;
    }

    public function getEgg($barn)
    {
        $egg = 0;
        for ($i = 0; $i < count($barn); $i++) {
            if ($barn[$i]->getNameAnimal() === 'Chicken')
                $egg += $barn[$i]->takeProduct();
        }
        return $egg;
    }
}