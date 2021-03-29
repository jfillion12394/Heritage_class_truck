<?php

Class Truck extends Vehicle {


    public const loadStatus =  ['full', 'in filling'];

    private int $loadCapacity;
    private string $load = "";

    public function __construct (string $color, int $nbSeats, string $energy, int $loadCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->loadCapacity = $loadCapacity;

    }

    public function setLoadCapacity(int $loadCapacity): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getLoadCapacity(): int
    {
        return $this->loadCapacity;
    }

    public function setLoad(string $load): Truck
    {
        $this->load = $load;
        if (in_array($load, self::loadStatus)) {
            $this->load = $load;
        }
        else 
        {
            $this->load = "load status unkonwn";
        }
        return $this;
    }

    public function getLoad(): string
    {
        return $this->load;
    }

}
