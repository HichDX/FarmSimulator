<?php


namespace FarmSimulator\Factory;


class Farm
{
    function factory($countCow, $countChicken)
    {
        static $countC, $countCh; // Переменные, в которых хранятся общее количество коров и кур.
        $barn = array(); // Хлев
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
        $milk = 0;
        $egg = 0;
        for ($i = 0; $i < 7; $i++) {
            foreach ($barn as $barns) {
                switch ($barns->getNameAnimal()) {
                    case "Cow":
                        $milk += $barns->takeProduct();
                        break;
                    case "Chicken":
                        $egg += $barns->takeProduct();
                        break;
                }
            }
        }
        echo "Количество молока: " . $milk . "\n";
        echo "Количество яиц: " . $egg . "\n";
    }
}