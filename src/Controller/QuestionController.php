<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/hellorooms", name="hellorooms")
     */
    public function index()
    {
        return $this->render('question/hellorooms.html.twig', [
            'controller_name' => 'QuestionController',
        ]);
    }
}
