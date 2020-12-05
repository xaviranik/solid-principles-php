<?php

require_once('../../vendor/autoload.php');

$square_1 = new \OCP\Rectangle(11, 10);
$square_2 = new \OCP\Rectangle(5, 5);
$circle_1 = new \OCP\Circle(5);

// We can get the area sum of different shapes
$calculator = new \OCP\AreaCalculator();
echo $calculator->calculate([$square_1, $square_2, $circle_1]);