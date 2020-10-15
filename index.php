<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';



$car1 = new Car('green', 2, 'electricity');
var_dump($car1);

$car2 = new Car('yellow', 4, 'fried oil');
var_dump($car2);

echo $car1->forward().'<br>';
echo $car1->brake().'<br>';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck(60, 'golden', 3, 'fuel');
var_dump($truck);
echo $truck->forward().'<br>';
echo $truck->brake().'<br>';

/*truck in filling?*/
$truck->setLoad(40);
echo $truck->capacityVerification().'<br>';

/*truck filled?*/
$truck->setLoad(60);
echo $truck->capacityVerification().'<br>';

/*truck under or overfilled?*/
$truck->setLoad(0);
echo $truck->capacityVerification().'<br>';
$truck->setLoad(70);
echo $truck->capacityVerification().'<br>';
