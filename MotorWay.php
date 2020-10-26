<?php

require_once 'HighWay.php';

class MotorWay extends HighWay
{
    private $nbLane = 4;
    private $maxSpeed = 130;

public function addVehicle($Vehicle)
{ 
    if ($Vehicle instanceof Car) {
        $this->setCurrentVehicle($Vehicle);
        }
    }
}