<?php


namespace FarmSimulator\Factory;


class Farm
{
    private $milk;
    private $egg;

    public function factory($countCow, $countChicken)
    {
        static $countC, $countCh; // Переменные, в которых хранятся общее количество коров и кур.
        $barn = array(); // хлев
        $countC += $countCow;
        $countCh += $countChicken;
        for ($i = 0; $i < $countCow; $i++) {
            $barn[] = new Cow();
        }
        for ($i = 0; $i < $countChicken; $i++) {
            $barn[] = new Chicken();
        }
        echo
        "-----------------------------------------------------
                    Подсчет животных
-----------------------------------------------------\n";
        echo "Количество коров: " . $countC . "\n";
        echo "Количество куриц: " . $countCh . "\n";

        echo
        "-----------------------------------------------------
                    Сбор продукции 
-----------------------------------------------------\n";
        for ($i = 0; $i < 7; $i++) {
            $this->milk += $this->getMilk($barn);
            $this->egg += $this->getEgg($barn);
        }
        echo "Количество молока: " . $this->milk . "\n";
        echo "Количество яиц: " . $this->egg . "\n";
    }

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