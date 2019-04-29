<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReservarController extends AbstractController
{
    /**
     * @Route("/reservar", name="reservar")
     */
    public function index()
    {
        return $this->render('reservar/index.html.twig', [
            'controller_name' => 'ReservarController',
        ]);
    }


    /**
     * @Route("/config", name="config")
     */
    public function config()
    {
        return $this->render('reservar/reservar.html.twig', [
            'controller_name' => 'ReservarController',
        ]);
    }
}
