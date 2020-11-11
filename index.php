<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Vehicle.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'Skateboard.php';
require_once 'ResidentialWay.php';
require_once 'LightableInterface.php';
require_once 'Speedometer.php';


$car1 = new Car('green', 2, 'electricity',1);
/*var_dump($car1);*/

$car2 = new Car('yellow', 4, 'fried oil',0);
/*var_dump($car2);*/

/*echo $car1->forward().'<br>';
echo $car1->brake().'<br>';*/

$bicycle = new Bicycle('blue', 1);
/*echo $bicycle->forward();
var_dump($bicycle);

var_dump(Car::ALLOWED_ENERGIES);

$truck = new Truck(60, 'golden', 3, 'fuel');
var_dump($truck);
echo $truck->forward().'<br>';
echo $truck->brake().'<br>';*/

/*truck in filling?
$truck->setLoad(40);
echo $truck->capacityVerification().'<br>';

truck filled?
$truck->setLoad(60);
echo $truck->capacityVerification().'<br>';

truck under or overfilled?
$truck->setLoad(0);
echo $truck->capacityVerification().'<br>';
$truck->setLoad(70);
echo $truck->capacityVerification().'<br>';

$Motorway666 = new MotorWay;
$Motorway666->addVehicle($car1);
var_dump($Motorway666->getCurrentVehicle());

$Pedestrian1 = new PedestrianWay;
$Pedestrian1->addVehicle($bicycle);
var_dump($Pedestrian1->getCurrentVehicle());

$skate1 = new Skateboard('black', 0);
$residential1 = new ResidentialWay;
$residential1->addVehicle($skate1);
var_dump($residential1->getCurrentVehicle());

    try {
        echo $car1->start('On');
    } catch(Exception $e) {
        $car1->setParkBrake(false);
    } finally {
        echo 'ma voiture roule comme un donut';
    }*/
    
    /*echo $car1->switchOn()."<br>";
    echo $car1->switchOff()."<br>";

    echo $bicycle->switchOn()."<br>";
    $bicycle->setCurrentSpeed(15);
    echo $bicycle->switchOn()."<br>";
    echo $bicycle->switchOff();*/

    echo Speedometer::convertKmToMiles(10).'<br>';
    echo Speedometer::convertMilesToKm(10);