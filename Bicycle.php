<?php

class Bicycle 
{
/**@var string*/
private $color;

/*@var integer*/

private $currentSpeed;

/*@var integer*/
public $nbSeats;

/*@var integer*/
public $nbWheels = 2;

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

public function dump()
{
    var_dump($this);
}

public function getColor()
{
    return $this->color;
}

public function setColor(string $color) : void
{
    $this->color = $color;
}

public function getCurrentSpeed() : int
{
    return $this->currentSpeed;
}


public function setCurrentSpeed(int $currentSpeed) : void
{
    $this->currentSpeed = $currentSpeed;
}

public function __construc(string $color)
{
    $this->color = $color;
}
}

