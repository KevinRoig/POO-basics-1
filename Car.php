<?php

class Car 
{
/*@var int*/
private $nbWheels;

/*@var int*/
private $currentSpeed;

/*@var string*/
private $color;

/*@var int*/
private $nbSeats;

/*@var string*/
private $energy;

/*@var int*/
private $energyLevel;

public function __construct(string $color, int $nbSeats, string $energy)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
}

public function forward()
{
    $this->currentSpeed = 15;

    return "Go !";
}

public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}

public function start(string $answer): string
{
    if ($answer == 'On')
    {
        return 'The car is on';
    } else 
    {
        return 'You have to start the car';
    }
}

public function getNbwheels()
{
    return $this->nbWheels;
}

public function getCurrentSpeed()
{
    return $this->currentSpeed;
}

public function getColor()
{
    return $this->color;
}

public function getNbSeats()
{
    return $this->numberSeats;
}

public function getEnergy()
{
    return $this->energy;
}

public function getEnergyLevel()
{
    return $this->energyLevel;
}

}