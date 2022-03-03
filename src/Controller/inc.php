<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class inc extends AbstractController
{
    /**
     * @Route("/incc", name="incc")
     */
    public function index(): Response
    {
        return $this->render('inc/navbar.html.twig', [
            'controller_name' => 'inc',
        ]);
    }
}
