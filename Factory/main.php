<?php

namespace FarmSimulator\Factory;

require_once '../vendor/autoload.php';

function createAnimal(GUIFarm $farm)
{
    return $farm->createAnimal();
}

$countCow = 10; // Начальное количество коров
$countChicken = 20; // Начальное количество кур
function factory($countCow, $countChicken)
{
    static $countC, $countCh; // Переменные, в которых хранятся общее количество коров и кур.
    global $barn; // Хлев
    $countC += $countCow;
    $countCh += $countChicken;
    for ($i = 0; $i < $countCow; $i++) {
        $barn[] = createAnimal(new CowFarm());
    }
    for ($i = 0; $i < $countChicken; $i++) {
        $barn[] = createAnimal(new ChickenFarm());
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
        for ($j = 0; $j < count($barn); $j++) {
            switch ($barn[$j]->getNameAnimal()) {
                case 'Cow':
                    $milk += $barn[$j]->getProduct();
                    break;
                case 'Chicken':
                    $egg += $barn[$j]->getProduct();
                    break;
            }
        }
    }
    echo "Количество молока: " . $milk . "\n";
    echo "Количество яиц: " . $egg . "\n";
}

factory($countCow, $countChicken);
echo
"-----------------------------------------------------
                    Сходить в магазин?
-----------------------------------------------------\n";
$answer = strtoupper(readline('Y[Да] N[Нет]='));
if ($answer === "Y") {
    echo
    "-----------------------------------------------------
                    Вы зашли в магазин
-----------------------------------------------------\n";
    $countCow = readline('Сколько коров вы собираетесь купить =');
    $countChicken = readline('Сколько кур вы собираетесь купить =');
    factory($countCow, $countChicken);
} else {
    echo 'Конец';
}

