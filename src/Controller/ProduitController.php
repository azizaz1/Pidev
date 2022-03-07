<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\User;
use App\Form\ReservationType;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;
use App\Repository\ProduitRepository;
use App\Form\ProduitType;

class ProduitController extends AbstractController
{
    /**
     * @Route("/getaway/produit", name="produit")
     */
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    /**
     * @Route("/getaway/produit/list", name="listp")
     */
    public function list(): Response
    {
        $rep=$this->getDoctrine()->getRepository(Produit::class);
        $produits=$rep->findAll();
        return $this->render('back-office/produit/list.html.twig', [
            'produit' => $produits,
        ]);

    }

    /**
     * @Route("/getaway/produit/delete/{id}", name="deletep")
     */
    public function delete($id): Response
    {
        $rep = $this->getDoctrine()->getRepository(Produit::class);
        $em = $this->getDoctrine()->getManager();
        $produit = $rep->find($id);
        $em->remove($produit);
        $em->flush();
        return $this->redirectToRoute('list');

    }
    /**
     * @Route("/getaway/produit/add", name="addp")
     */
    public function add(Request $request): Response
    {
        $produit=new Produit();
        $form=$this->createForm(ProduitType::class,$produit);
        $form=$form->handleRequest($request);
        if ($form->isSubmitted())
        {
            $produit=$form->getData();
            $em=$this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
            return $this->redirectToRoute('listp');

        }
        return $this->render('back-office/produit/add.html.twig', [
            'formA' => $form->createView(),

        ]);
    }
    /**
     * @Route("/getaway/produit/update/{id}", name="updatep")
     */
    public function update(Request $request,$id): Response
    {
        $rep=$this->getDoctrine()->getRepository(Produit::class);

        $produit=$rep->find($id);
        $form=$this->createForm(ProduitType::class,$produit);
        $form=$form->handleRequest($request);
        if ($form->isSubmitted())
        {

            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listp');

        }

        return $this->render('back-office/produit/update.html.twig', [
            'formA' => $form->createView(),
        ]);
    }
}
