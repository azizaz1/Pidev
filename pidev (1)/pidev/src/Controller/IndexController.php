<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index(): Response
    {
        return $this->render('back-office/index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }


        /**
     * @Route("/test", name="test")
     */
    public function test(): Response
    {
        return $this->render('front-office/index/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
