<?php

namespace App\Controller;

use App\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    /**
     * @Route("/", name="event")
     */
    public function index(): Response
    {
        $event_lists = $this->getDoctrine()->getRepository(Event::class);
        $events      = $event_lists->findAll();
        return $this->render('event/index.html.twig', [
            'events'          => $events
        ]);
    }
}
