<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    /**
     * @Route("/property", name="property")
     */
    public function property()
    {
        return $this->render('property/index.html.twig', [
            'controller_name' => 'PropertyController',
        ]);
    }

    /**
     * @Route("/rooms", name="rooms")
     */
    public function rooms()
    {
        return $this->render('property/rooms.html.twig', [
            'controller_name' => 'PropertyController',
        ]);
    }
}
