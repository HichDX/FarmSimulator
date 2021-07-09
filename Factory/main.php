<?php

namespace FarmSimulator\Factory;

require_once '../vendor/autoload.php';

$countCow = 10; // Начальное количество коров
$countChicken = 20; // Начальное количество кур
$farm = new Farm();
$farm->factory($countCow, $countChicken);

