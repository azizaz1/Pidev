<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Voiture;
use App\Repository\VoitureRepository;
use App\Form\VoitureType;

class VoitureController extends AbstractController
{
    /**
     * @Route("/voiture", name="voiture")
     */
    public function index(): Response
    {
        return $this->render('voiture/index.html.twig', [
            'controller_name' => 'VoitureController',
        ]);
    }
    /**
     * @Route("/voiture/list", name="listv")
     */
    public function list(): Response
    {
        $rep=$this->getDoctrine()->getRepository(Voiture::class);
        $voitures=$rep->findAll();
        return $this->render('back-office/voiture/list.html.twig', [
            'voiture' => $voitures,
        ]);

    }

    /**
     * @Route("/voiture/delete/{id}", name="deletev")
     */
    public function delete($id): Response
    {
        $rep = $this->getDoctrine()->getRepository(Voiture::class);
        $em = $this->getDoctrine()->getManager();
        $voiture = $rep->find($id);
        $em->remove($voiture);
        $em->flush();
        return $this->redirectToRoute('listv');

    }
    /**
     * @Route("/voiture/add", name="addv")
     */
    public function add(Request $request): Response
    {
        $voiture=new Voiture();
        $form=$this->createForm(VoitureType::class,$voiture);
        $form=$form->handleRequest($request);
        if ($form->isSubmitted())
        {
            $voiture=$form->getData();
            $em=$this->getDoctrine()->getManager();
            $em->persist($voiture);
            $em->flush();
            return $this->redirectToRoute('listv');

        }
        return $this->render('back-office/voiture/add.html.twig', [
            'formA' => $form->createView(),

        ]);
    }
    /**
     * @Route("/voiture/update/{id}", name="updatev")
     */
    public function update(Request $request,$id): Response
    {
        $rep=$this->getDoctrine()->getRepository(Voiture::class);

        $voiture=$rep->find($id);
        $form=$this->createForm(VoitureType::class,$voiture);
        $form=$form->handleRequest($request);
        if ($form->isSubmitted())
        {

            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listv');

        }

        return $this->render('back-office/voiture/update.html.twig', [
            'formA' => $form->createView(),
        ]);
    }

}
