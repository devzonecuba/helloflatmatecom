<?php

namespace App\Controller;

use App\Entity\Centrosalud;
use App\Form\CentrosaludType;
use App\Repository\CentrosaludRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/centrosalud")
 */
class CentrosaludController extends AbstractController
{
    /**
     * @Route("/", name="centrosalud_index", methods={"GET"})
     */
    public function index(CentrosaludRepository $centrosaludRepository): Response
    {
        return $this->render('centrosalud/index.html.twig', [
            'centrosaluds' => $centrosaludRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="centrosalud_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $centrosalud = new Centrosalud();
        $form = $this->createForm(CentrosaludType::class, $centrosalud);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($centrosalud);
            $entityManager->flush();

            return $this->redirectToRoute('centrosalud_index');
        }

        return $this->render('centrosalud/new.html.twig', [
            'centrosalud' => $centrosalud,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="centrosalud_show", methods={"GET"})
     */
    public function show(Centrosalud $centrosalud): Response
    {
        return $this->render('centrosalud/show.html.twig', [
            'centrosalud' => $centrosalud,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="centrosalud_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Centrosalud $centrosalud): Response
    {
        $form = $this->createForm(CentrosaludType::class, $centrosalud);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('centrosalud_index', [
                'id' => $centrosalud->getId(),
            ]);
        }

        return $this->render('centrosalud/edit.html.twig', [
            'centrosalud' => $centrosalud,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="centrosalud_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Centrosalud $centrosalud): Response
    {
        if ($this->isCsrfTokenValid('delete'.$centrosalud->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($centrosalud);
            $entityManager->flush();
        }

        return $this->redirectToRoute('centrosalud_index');
    }
}
