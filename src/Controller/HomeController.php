<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [

        ]);
    }

        /**
     * @Route("/home/contactos", name="contactos")
     */
    public function contactos()
    {
        return $this->render('home/contactos.html.twig', [

        ]);
    }

    /**
     * @Route("/home/aviso", name="aviso")
     */
    public function aviso()
    {
        return $this->render('home/aviso.html.twig', [

        ]);
    }    
}
