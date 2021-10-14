<?php

use App\ExtraLegRoom;
use App\HoldLuggage;
use App\StandardFlightReservation;

require "vendor/autoload.php";

$reservation = new StandardFlightReservation();

$reservation = new ExtraLegRoom($reservation);

$reservation = new HoldLuggage($reservation);

echo $reservation->calculatePrice();