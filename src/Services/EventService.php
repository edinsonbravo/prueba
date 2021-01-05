<?php

namespace App\Services;

use App\Entity\Event;
use Doctrine\ORM\EntityManagerInterface;

class EventService
{

    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @return Events[]
     */
    public function eventList($initial, $finish)
    {
        return $this->em->getRepository(Event::class)->findByDateTime($initial, $finish);
    }
}
