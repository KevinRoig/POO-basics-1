<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';


class Car extends Vehicle implements LightableInterface
{
const ALLOWED_ENERGIES = [
    'fuel',
    'electric'
];

/*@var string*/
private $energy;

/*@var int*/
private $energyLevel;


public function __construct(string $color, int $nbSeats, string $energy)
{
    parent::__construct($color, $nbSeats);
    $this->setEnergy($energy);
}

public function getEnergy()
{
    return $this->energy;
}

public function setEnergy( string $energy) 
{
    if(in_array($energy, self::ALLOWED_ENERGIES)){
    $this->energy = $energy;
    }
    return $this;
}

public function getEnergyLevel() : int
{
    return $this->energyLevel;
}

public function setEnergyLevel(int $energylevel) : void
{
    $this->energyLevel = $energylevel;
}

/*@var bool*/
private $hasParkBrake = true;

public function setParkBrake(bool $hasParkBrake): void
{
    $this->hasParkBrake = $hasParkBrake;
}

public function start(string $answer): string
{
    if ($this->hasParkBrake == 1){
        throw new Exception();
    }
    if ($answer == 'On') {
        return 'The car is on';
    } else {
        return 'You have to start the car';
    }
}

public function switchOn(): bool
{
    return true;
}

public function switchOff(): bool
{
    return false;
}

}