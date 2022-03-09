<?php

namespace App\Controller;
use App\Entity\Produit;
use App\Form\ProduitFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Image;
use App\Entity\Category;
use Dompdf\Dompdf;
use Dompdf\options;



class ProduitController extends AbstractController
{
     /**
 * @Route("/produits", name="produits")
 */
public function produits()
{
    
    $produit = $this->getDoctrine()->getRepository(produit::class)->findAll();
     
    return $this->render('produit/produit.html.twig', [
        "produit" => $produit,
        
    ]);
}
    /**
     * @Route("/add-produit", name="add_produit")
     */
    public function addProduit(Request $request): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitFormType::class, $produit);
        $form->handleRequest($request);
    
        if($form->isSubmitted() && $form->isValid())
        {
            

           $path=$this->getParameter('kernel.project_dir') .'/public/imgs';
           $produit=$form->getData();
            
            $image=$produit->getImage();
            $file=$image->getFile();
            $nom = md5(uniqid()). '.'.$file->guessExtension();
            $file->move($path,$nom);
            $image->setNom($nom);
            

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($produit);
            $entityManager->flush();
            return $this->redirectToRoute('produits');
        }
    
        return $this->render("produit/produit-form.html.twig", [
            "form_title" => "Ajouter un produit",
            "form_produit" => $form->createView(),
        ]);
    }
   
 


/**
 * @Route("/modify-produit/{id}", name="modify_produit")
 */
public function modifyProduit(Request $request, int $id): Response
{
    $entityManager = $this->getDoctrine()->getManager();

    $produit = $entityManager->getRepository(Produit::class)->find($id);
    $form = $this->createForm(ProduitFormType::class, $produit);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid())
    {
        $entityManager->flush();
        return $this->redirectToRoute('produits');
    }

    return $this->render("produit/produit-form.html.twig", [
        "form_title" => "Modifier un produit",
        "form_produit" => $form->createView(),
    ]);
}
/**
 * @Route("/delete-produit/{id}", name="delete_produit")
 */
public function deleteProduit(int $id): Response
{
    $entityManager = $this->getDoctrine()->getManager();
    $produit = $entityManager->getRepository(Produit::class)->find($id);
    $entityManager->remove($produit);
    $entityManager->flush();

    return $this->redirectToRoute("produits");
}

}