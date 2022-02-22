<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Hotel;
use App\Repository\HotelRepository;
use App\Form\HotelType;

class HotelController extends AbstractController
{
    /**
     * @Route("/hotel", name="hotel")
     */
    public function index(): Response
    {
        return $this->render('hotel/index.html.twig', [
            'controller_name' => 'HotelController',
        ]);
    }
    /**
     * @Route("/hotel/list", name="listh")
     */
    public function list(): Response
    {
        $rep=$this->getDoctrine()->getRepository(Hotel::class);
        $hotels=$rep->findAll();
        return $this->render('back-office/hotel/list.html.twig', [
            'hotel' => $hotels,
        ]);

    }

    /**
     * @Route("/hotel/delete/{id}", name="deleteh")
     */
    public function delete($id): Response
    {
        $rep = $this->getDoctrine()->getRepository(Hotel::class);
        $em = $this->getDoctrine()->getManager();
        $hotel = $rep->find($id);
        $em->remove($hotel);
        $em->flush();
        return $this->redirectToRoute('listh');

    }


    /**
     * @Route("/hotel/update/{id}", name="updateh")
     */
    public function update(Request $request,$id): Response
    {
        $rep=$this->getDoctrine()->getRepository(Hotel::class);

        $hotel=$rep->find($id);
        $form=$this->createForm(HotelType::class,$hotel);
        $form=$form->handleRequest($request);
        if ($form->isSubmitted())
        {

            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listh');

        }

        return $this->render('back-office/hotel/update.html.twig', [
            'formA' => $form->createView(),
        ]);
    }
    /**
     * @Route("/hotel/add", name="addh")
     */
    public function add(Request $request): Response
    {
        $hotel=new Hotel();
        $form=$this->createForm(HotelType::class,$hotel);
        $form=$form->handleRequest($request);
        if ($form->isSubmitted())
        {
            $hotel=$form->getData();
            $em=$this->getDoctrine()->getManager();
            $em->persist($hotel);
            $em->flush();
            return $this->redirectToRoute('listh');

        }
        return $this->render('back-office/hotel/add.html.twig', [
            'formA' => $form->createView(),

        ]);
    }

}
