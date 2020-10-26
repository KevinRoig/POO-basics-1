<?php

abstract class HighWay
{
    /*@var array*/
    private $currentVehicle = [];

    /*@var int*/
    private $nbLane;


    /*@var int*/
    private $maxSpeed;

    public function getCurrentVehicle() 
    {
        return $this->currentVehicle;
    }

    public function setCurrentVehicle($currentVehicle)
    {
        $this->currentVehicle[] = $currentVehicle;
    }

    public function getnbLane()
    {
        return $this->nbLane;
    }

    public function setNbLane (int $nbLane)
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed( int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle($Vehicle);



}