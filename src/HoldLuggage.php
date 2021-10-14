<?php

namespace App;

class HoldLuggage extends FlightReservationDecorator
{
    private const Price = 60;

    public function calculatePrice(): int|float
    {
        return $this->flightReservation->calculatePrice() + self::Price;
    }
}