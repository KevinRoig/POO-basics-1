<?php

require_once 'HighWay.php';

class PedestrianWay extends HighWay
{
    private $nbLane = 1;
    private $maxSpeed = 10;

public function addVehicle($Vehicle)
{ 
    $this->setCurrentVehicle($Vehicle);
    }
}