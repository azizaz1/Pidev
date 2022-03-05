<?php

namespace App\Controller;

// ...

use App\Entity\Events;
use App\Form\EventFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class EventController extends AbstractController
{
    // ...

    /**
     * @Route("/add-events", name="add_events")
     */
    public function addEvents(Request $request): Response
    {
        $events = new Events();

        $form = $this->createForm(EventFormType::class , $events);
       
        $form = $form->handleRequest($request);

        if ($form->isSubmitted()){
            $events = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($events);
            $em->flush();
        }
        return $this->render("event/event-form.html.twig", [
            "form_title" => "Ajouter un event",
            "form_event" => $form->createView(),
        ]);
    }

/**
 * @Route("/events", name="events")
 */
public function events(): Response
{
    $events = $this->getDoctrine()->getRepository(events::class)->findAll();

    return $this->render('event/events.html.twig', [
        "events" => $events,
    ]);
}

/**
 * @Route("/events1", name="events1")
 */
public function events1(): Response
{
    $events = $this->getDoctrine()->getRepository(events::class)->findAll();

    return $this->render('event/monfront.html.twig', [
        "events" => $events,
    ]);
}
/**
 * @Route("/eventss/{id}", name="eventss")
 */
public function eventss(int $id): Response
{
    $events = $this->getDoctrine()->getRepository(events::class)->find($id);

    return $this->render("event/eventid.html.twig", [
        "events" => $events,
    ]);
}
/**
 * @Route("/modify-events/{id}", name="modify_events")
 */
public function modifyEvent(Request $request, int $id): Response
{
    $entityManager = $this->getDoctrine()->getManager();

    $events = $entityManager->getRepository(events::class)->find($id);
    $form = $this->createForm(EventFormType::class, $events);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid())
    {
        $entityManager->flush();
    }

    return $this->render("event/event-form2.html.twig", [
        "form_title" => "Modifier un event",
        "form_event" => $form->createView(),
    ]);
}
/**
 * @Route("/delete-events/{id}", name="delete_events")
 */
public function deleteEvent(int $id): Response
{
    $entityManager = $this->getDoctrine()->getManager();
    $events = $entityManager->getRepository(events::class)->find($id);
    $entityManager->remove($events);
    $entityManager->flush();

    return $this->redirectToRoute("events");
}
}