<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LegalityController extends AbstractController
{
    /**
     * @Route("/legality", name="legality")
     */
    public function index()
    {
        return $this->render('legality/index.html.twig', [
            'controller_name' => 'LegalityController',
        ]);
    }
}
