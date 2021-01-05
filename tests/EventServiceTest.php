<?php

namespace App\Tests;

use App\Entity\Event;
use App\Repository\EventRepository;
use App\Services\EventService;
use PHPUnit\Framework\TestCase;

class EventServiceTest extends TestCase
{
    protected $eventRepository;
    protected $eventService;

    protected function setUp(): void
    {
        $this->eventRepository = $this->createMock(EventRepository::class);
        $this->eventService    = new EventService($this->eventRepository);
    }

    public function testResponseArray()
    {
        $events = [];
        $this->eventRepository->method('findByDateTime')->willReturn($events);
        self::assertIsArray($events);
    }

    public function testResponseObjectTypeEachArrayValue()
    {
        $event1 = $this->createMock(Event::class);
        $event2 = $this->createMock(Event::class);
        $events = [$event1, $event2];
        $this->eventRepository->method('findByDateTime')->willReturn($events);
        foreach ($events as $event) {
            self::assertInstanceOf(Event::class, $event);
        }
    }

    public function testResponseServiceArray()
    {
        $dateInitial = date('Y-m-d', strtotime('-30 days')) . ' 00:00:00';
        $dateFinish  = date('Y-m-d') . ' 23:59:59';
        $events      = $this->eventService->eventList($dateInitial, $dateFinish);
        self::assertIsArray($events);
    }

    public function testResponseFailedObjectTypeEachArrayValue()
    {
        $event1 = $this->createMock(EventService::class);
        $events = [$event1];
        $this->eventRepository->method('findByDateTime')->willReturn($events);
        foreach ($events as $event) {
        	self::assertNotInstanceOf(Event::class, $event);
        }
    }
}
