<?php

namespace App\Controller;

use App\Entity\Hotel;
use App\Form\HotelType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Reservation;
use App\Repository\UserRepository;
use App\Form\ReservationType;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }
    /**
     * @Route("/reservation/list", name="listr")
     */
    public function list(): Response
    {
        $rep=$this->getDoctrine()->getRepository(Reservation::class);
        $reservations=$rep->findAll();
        return $this->render('back-office/reservation/list.html.twig', [
            'reservation' => $reservations,
        ]);

    }

    /**
     * @Route("/reservation/delete/{id}", name="deleter")
     */
    public function delete($id): Response
    {
        $rep = $this->getDoctrine()->getRepository(Reservation::class);
        $em = $this->getDoctrine()->getManager();
        $reservation = $rep->find($id);
        $em->remove($reservation);
        $em->flush();
        return $this->redirectToRoute('listr');

    }
    /**
     * @Route("/reservation/add", name="addr")
     */
    public function add(Request $request): Response
    {
        $reservation=new Reservation();
        $form=$this->createForm(ReservationType::class,$reservation);
        $form=$form->handleRequest($request);
        if ($form->isSubmitted())
        {
            $hotel=$form->getData();
            $em=$this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();
            return $this->redirectToRoute('listr');

        }
        return $this->render('back-office/reservation/add.html.twig', [
            'formA' => $form->createView(),

        ]);
    }
    /**
     * @Route("/reservation/update/{id}", name="updater")
     */
    public function update(Request $request,$id): Response
    {
        $rep=$this->getDoctrine()->getRepository(Reservation::class);

        $reservation=$rep->find($id);
        $form=$this->createForm(ReservationType::class,$reservation);
        $form=$form->handleRequest($request);
        if ($form->isSubmitted())
        {

            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listr');

        }

        return $this->render('back-office/reservation/update.html.twig', [
            'formA' => $form->createView(),
        ]);
    }


}
