<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();

$bike->setcolor('red');
$bike->nbWheels = 3;
$bike->setCurrentSpeed(25);

echo $bike->forward();
echo '<br> Vitesse du vélo: ' .$bike->getCurrentSpeed() .'km/h' .'<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo: ' .$bike->getCurrentSpeed() .'km/h' .'<br>';
echo $bike->brake();

$rockrider = new Bicycle();
$rockrider->setColor('yellow');

$tornado = new Bicycle();
$tornado->setColor('black');

$tornado->forward();
$rockrider->forward();
/*echo $tornado->getColor() .PHP_EOL;
echo $rockrider->setCurrentSpeed(-5);*/

$car1 = new Car('green', 2, 'electricity');
var_dump($car1);

$car2 = new Car('yellow', 4, 'fried oil');
var_dump($car2);

echo $car1->start('On').'<br>';
echo $car1->forward().'<br>';
echo $car1->brake().'<br>';
