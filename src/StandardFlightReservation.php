<?php

namespace App;

class StandardFlightReservation implements FlightReservationInterface
{
    public function calculatePrice(): int|float
    {
        return 300;
    }
}