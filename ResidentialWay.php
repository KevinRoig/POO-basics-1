<?php

require_once 'HighWay.php';

class ResidentialWay extends HighWay
{
    private $nbLane = 2;
    private $maxSpeed = 50;

public function addVehicle($Vehicle)
{ 
    if (($Vehicle instanceof Bicycle) || ($Vehicle instanceof Skateboard)) {
    $this->setCurrentVehicle($Vehicle);
    }
    }
}