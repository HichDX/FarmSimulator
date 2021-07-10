<?php

namespace FarmSimulator\Factory;

require_once '../vendor/autoload.php';

$countCow = 10; // Начальное количество коров
$countChicken = 20; // Начальное количество кур
$farm = new Farm();
$farm->factory($countCow, $countChicken);

echo
"-----------------------------------------------------
                    Сходить в магазин?
-----------------------------------------------------\n";

$answer = strtoupper(readline("Y[Да] N[Нет] = "));
if($answer === "Y"){
    $countCow = readline("Сколько коров купить? ");
    $countChicken = readline("Сколько кур купить? ");
    $farm->factory($countCow, $countChicken);
}else{
    echo "Конец";
}
