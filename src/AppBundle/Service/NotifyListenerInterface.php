<?php

namespace AppBundle\Service;


use AppBundle\Entity\Booking;

interface NotifyListenerInterface
{

    public function notify(Booking $booking, $status);

    public function interestedIn(Booking $booking, $status);
}