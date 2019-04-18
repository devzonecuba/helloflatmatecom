<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/hellorooms", name="hellorooms")
     */
    public function hellorooms()
    {
        return $this->render('question/hellorooms.html.twig', [
            'controller_name' => 'QuestionController',
        ]);
    }

    /**
     * @Route("/helloowners", name="helloowners")
     */
    public function helloowners()
    {
        return $this->render('question/helloowners.html.twig', [
            'controller_name' => 'QuestionController',
        ]);
    }
}
