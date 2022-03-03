<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class innc extends AbstractController
{
    /**
     * @Route("/innc", name="innc")
     */
    public function index(): Response
    {
        return $this->render('innc/navbarr.html.twig', [
            'controller_name' => 'innc',
        ]);
    }
}
