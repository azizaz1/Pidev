<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Form\UserType;




class UserController extends AbstractController
{
    /**
     * @Route("/getaway/user", name="user")
     */
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
     /**
     * @Route("/getaway/user/list" , name="listu")
     */
    public function list(): Response
    {
        $rep=$this->getDoctrine()->getRepository(User::class);
        $users=$rep->findAll();
        return $this->render('back-office/user/list.html.twig', [
            'user' => $users,
        ]);
    
    }

/**
    * @Route("/getaway/user/delete/{id}", name="deleteu")
    */
    public function delete($id): Response
    {
        $rep = $this->getDoctrine()->getRepository(User::class);
        $em = $this->getDoctrine()->getManager();
        $user = $rep->find($id);
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('listu');
    
    }
     /**
    * @Route("/getaway/user/add", name="addu")
    */
   public function add(Request $request): Response
   {
       $user=new User();
       $form=$this->createForm(UserType::class,$user);
       $form=$form->handleRequest($request);
       if ($form->isSubmitted())
       {
       $user=$form->getData();
       $em=$this->getDoctrine()->getManager();
       $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('listu');
        
       }
       return $this->render('back-office/user/add.html.twig', [
           'formA' => $form->createView(),
           
       ]);
   }
   /**
    * @Route("/getaway/user/update/{id}", name="updateu")
    */
    public function update(Request $request,$id): Response
    {
     $rep=$this->getDoctrine()->getRepository(User::class);
     
     $user=$rep->find($id);
     $form=$this->createForm(UserType::class,$user);
     $form=$form->handleRequest($request);
     if ($form->isSubmitted())
     {
    
     $em=$this->getDoctrine()->getManager();
     $em->flush();
      return $this->redirectToRoute('listu');
      
     }
 
        return $this->render('back-office/user/update.html.twig', [
            'formA' => $form->createView(),
        ]);
    }

}
