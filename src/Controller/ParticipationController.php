<?php

namespace App\Controller;



use App\Entity\Participation;
use App\Form\ParticipationFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Swift_Mailer;

use Symfony\Component\Mime\Email;


class ParticipationController extends AbstractController
{
   // ...

    /**
     * @Route("/add-participation", name="add_participation")
     */
    public function addParticipation(Request $request): Response
    {
        $participation = new Participation();

        $form = $this->createForm(ParticipationFormType::class , $participation);
        $form = $form->handleRequest($request);

        if ($form->isSubmitted()){
            $participation = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($participation);
            $em->flush();
            



        // ...
        }
        return $this->render("participation/participation-form.html.twig", [
            "form_title" => "Ajouter un Participation",
            "form_participation" => $form->createView(),
        ]);
    }
    /**
 * @Route("/participations", name="participations")
 */
public function participations(): Response
{
    $participation = $this->getDoctrine()->getRepository(participation::class)->findAll();

    return $this->render('participation/participations.html.twig', [
        "participation" => $participation,
    ]);
}
/**
 * @Route("/modify-participation/{id}", name="modify_participation")
 */
public function modifyParticipation(Request $request, int $id): Response
{
    $entityManager = $this->getDoctrine()->getManager();

    $participation = $entityManager->getRepository(participation::class)->find($id);
    $form = $this->createForm(ParticipationFormType::class, $participation);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid())
    {
        $entityManager->flush();
    }

    return $this->render("participation/participation-form.html.twig", [
        "form_title" => "Modifier un participation",
        "form_participation" => $form->createView(),
    ]);
}
/**
 * @Route("/delete-participations/{id}", name="delete_participations")
 */
public function deleteParticipation(int $id): Response
{
    $entityManager = $this->getDoctrine()->getManager();
    $participation = $entityManager->getRepository(participation::class)->find($id);
    $entityManager->remove($participation);
    $entityManager->flush();

    return $this->redirectToRoute("participations");
}
}
