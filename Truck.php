<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
/*@var int*/
private $capacity;

/*@var int*/
private $load;

public function __construct(int $capacity, string $color, int $nbSeats, string $energy)
{
    parent::__construct($color, $nbSeats, $energy);
    $this->capacity = $capacity;
    $this->energy = $energy;    
}

public function capacityVerification() {
    if (0 < $this->load && $this->load < $this->capacity) {
        return 'in filling';
    } elseif ($this->load === $this->capacity) {
            return 'full';
    } else {
        return 'it\'s not possible!';
    }
}

public function getCapacity() :int
{
    return $this->capacity; 
}

public function setCapacity(int $capacity) :void
{
    $this->capacity = $capacity;
}

public function getLoad() :int{
    return $this->load;
}

public function setLoad(int $load)
{
    $this->load = $load;
}




}
