<?php

namespace App\Controller;
use App\Entity\Category;
use App\Form\CategoryFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class CategoryController extends AbstractController
{
    /**
     * @Route("/add-category", name="addcategory")
     */
    public function addcategory(Request $request): Response
    {
        $category = new category();
        $form = $this->createForm(CategoryFormType::class, $category);
        $form->handleRequest($request);
    
        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($category);
            $entityManager->flush();
            return $this->redirectToRoute('category');
        }
    
        return $this->render("category/category-form.html.twig", [
            "form_title" => "Ajouter une categorie",
            "form_category" => $form->createView(),
        ]);
    }
    /**
 * @Route("/category", name="category")
 */
public function category()
{
    $category = $this->getDoctrine()->getRepository(category::class)->findAll();

    return $this->render('category/category.html.twig', [
        "category" => $category,
    ]);
}
/**
 * @Route("/modify-category/{id}", name="modify_category")
 */
public function modifycategory(Request $request, int $id): Response
{
    $entityManager = $this->getDoctrine()->getManager();

    $category = $entityManager->getRepository(category::class)->find($id);
    $form = $this->createForm(CategoryFormType::class, $category);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid())
    {
        $entityManager->flush();
        return $this->redirectToRoute('category');
    }

    return $this->render("category/category-form.html.twig", [
        "form_title" => "Modifier une categorie",
        "form_category" => $form->createView(),
    ]);
}
/**
 * @Route("/delete-category/{id}", name="delete_category")
 */
public function deletecategory(int $id): Response
{
    $entityManager = $this->getDoctrine()->getManager();
    $category = $entityManager->getRepository(category::class)->find($id);
    $entityManager->remove($category);
    $entityManager->flush();

    return $this->redirectToRoute("category");
}
}