<?php

class Vehicle
{
/*@var string*/
protected $color;

/*var int*/
protected $nbWheels;

/*var int*/
protected $currentSpeed;

/*var int*/
protected $nbSeats;

public function __construct(string $color, int $nbSeats)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
}

public function getColor() : string
{
    return $this->color;
}

public function setColor(string $color) : void
{
    $this->color = $color;
}

public function getNbWheels() : int
{
    return $this->nbWheels;
}

public function setNbWheels(int $nbWheels)
{
    $this->nbWheels = $nbWheels;
}

public function getCurrentSpeed() : int
{
    return $this->currentSpeed;
}

public function setCurrentSpeed(int $currentSpeed)
{
    $this->currentSpeed = $currentSpeed;
}

public function getNbSeats() : int
{
    return $this->nbSeats;
}

public function setNbSeats(int $nbSeats) : void
{
    $this->nbSeats = $nbSeats;
}

public function forward(): string
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

}