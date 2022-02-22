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
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
     /**
     * @Route("/user/list" , name="listu")
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
    * @Route("/user/delete/{id}", name="deleteu")
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
    * @Route("/user/add", name="addu")
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
    * @Route("/user/update/{id}", name="updateu")
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

    /**
     * @Route("/user/profil", name="profil")
     */
    public function profil(): Response
    {
        return $this->render('back-office/user/profil.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }


        /**
     * @Route("/user/auth", name="auth")
     */
    public function auth(Request $request): Response
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
        return $this->render('back-office/user/auth.html.twig', [
            'formA' => $form->createView(),
            
        ]);
    }


         /**
     * @Route("/user/login", name="login")
     */
    public function login(Request $request,UserRepository $repository)
    {
        $user = new user();
        $form=$this->createForm(UserType::class,$user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $userCheck = $repository->findOneBy(['email' => $user->getEmail()]);
            if($user->getMdp()==$userCheck->getMdp())
            {
                $session= new Session();
                $session->set('id',$userCheck->getId());
                $session->set('nom',$userCheck->getNom());
                $session->set('prenom',$userCheck->getPrenom());
                $session->set('email',$user->getEmail());
                $session->set('mdp',$user->getMdp());
                //$session->set('type',$userCheck->getType());
            }
        }
        return $this->render('back-office/user/login.html.twig', [
            'form' => $form->createView(),
        ]);

    }
    








}
