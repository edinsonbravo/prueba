<?php

namespace App\Services;

use App\Repository\EventRepository;

class EventService
{

    protected $eventRepository;

    public function __construct(EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    /**
     * @return Events[]
     */
    public function eventList($initial, $finish)
    {
        return $this->eventRepository->findByDateTime($initial, $finish);
    }
}
