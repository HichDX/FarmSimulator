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

        $productions = new Productions();
        for ($i = 0; $i < 7; $i++) {
            $this->milk += $productions->getMilk($barn);
            $this->egg += $productions->getEgg($barn);
        }
        echo "Количество молока: " . $this->milk . "\n";
        echo "Количество яиц: " . $this->egg . "\n";
    }
}