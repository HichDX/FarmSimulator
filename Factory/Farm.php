<?php


namespace FarmSimulator\Factory;


class Farm
{
    function factory($countCow, $countChicken)
    {
        static $countC, $countCh; // Переменные, в которых хранятся общее количество коров и кур.
        $barn = array(
            array(),
            array()
        );
        $countC += $countCow;
        $countCh += $countChicken;
        for ($i = 0; $i < $countCow; $i++) {
            $barn[0][] = new Cow();
        }
        for ($i = 0; $i < $countChicken; $i++) {
            $barn[1][] = new Chicken();
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
            for ($j = 0; $j<$countC; $j++) {
                $milk += $barn[0][$j]->takeProduct();
            }
            for ($j = 0; $j<$countCh; $j++) {
                $egg += $barn[1][$j]->takeProduct();
            }
        }
        echo "Количество молока: " . $milk . "\n";
        echo "Количество яиц: " . $egg . "\n";
    }
}