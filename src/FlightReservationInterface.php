<?php

namespace App;

interface FlightReservationInterface
{
    public function calculatePrice(): int|float;
}