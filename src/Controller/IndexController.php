<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/getaway/dashbord", name="index")
     */
    public function index(): Response
    {
        return $this->render('back-office/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }




    /**
     * @Route("/getaway/home", name="index_front")
     */
    public function indexfront(): Response
    {
        return $this->render('front-office/index.html.twig', [
            'controller_name' => 'IndexFrontController',
        ]);
    }


}
