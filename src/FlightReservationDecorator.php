<?php

namespace App;

abstract class FlightReservationDecorator implements FlightReservationInterface
{
    protected FlightReservationInterface $flightReservation;

    public function __construct(FlightReservationInterface $flightReservation)
    {
        $this->flightReservation = $flightReservation;
    }
}