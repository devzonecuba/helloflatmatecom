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

    /**
     * @Route("/apartaments", name="apartaments")
     */
    public function apartaments()
    {
        return $this->render('property/apartaments.html.twig', [
            'controller_name' => 'PropertyController',
        ]);
    }

    /**
     * @Route("/flats", name="flats")
     */
    public function flats()
    {
        return $this->render('property/flats.html.twig', [
            'controller_name' => 'PropertyController',
        ]);
    }

    /**
     * @Route("/reservation", name="reservation")
     */
    public function reservation()
    {
        return $this->render('property/reservation.html.twig', [
            'controller_name' => 'PropertyController',
        ]);
    }
}
