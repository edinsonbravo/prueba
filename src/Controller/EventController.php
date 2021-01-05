<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\EventService;

class EventController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(EventService $eventService): Response
    {
    	try {
    		$initial = date('Y-m-d', strtotime('-30 days')) . ' 00:00:00';
    		$finish = date('Y-m-d') . ' 23:59:59';
        	$events = $eventService->eventList($initial, $finish);
    	} catch (Exception $e) {
			$events = [];
    	}
        return $this->render('event/index.html.twig', [
            'events' => $events
        ]);
    }
}
