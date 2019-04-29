<?php

namespace App\Controller;

use App\Entity\Servicioadicional;
use App\Form\ServicioadicionalType;
use App\Repository\ServicioadicionalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/servicioadicional")
 */
class ServicioadicionalController extends AbstractController
{
    /**
     * @Route("/", name="servicioadicional_index", methods={"GET"})
     */
    public function index(ServicioadicionalRepository $servicioadicionalRepository): Response
    {
        return $this->render('servicioadicional/index.html.twig', [
            'servicioadicionals' => $servicioadicionalRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="servicioadicional_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $servicioadicional = new Servicioadicional();
        $form = $this->createForm(ServicioadicionalType::class, $servicioadicional);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($servicioadicional);
            $entityManager->flush();

            return $this->redirectToRoute('servicioadicional_index');
        }

        return $this->render('servicioadicional/new.html.twig', [
            'servicioadicional' => $servicioadicional,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="servicioadicional_show", methods={"GET"})
     */
    public function show(Servicioadicional $servicioadicional): Response
    {
        return $this->render('servicioadicional/show.html.twig', [
            'servicioadicional' => $servicioadicional,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="servicioadicional_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Servicioadicional $servicioadicional): Response
    {
        $form = $this->createForm(ServicioadicionalType::class, $servicioadicional);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('servicioadicional_index', [
                'id' => $servicioadicional->getId(),
            ]);
        }

        return $this->render('servicioadicional/edit.html.twig', [
            'servicioadicional' => $servicioadicional,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="servicioadicional_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Servicioadicional $servicioadicional): Response
    {
        if ($this->isCsrfTokenValid('delete'.$servicioadicional->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($servicioadicional);
            $entityManager->flush();
        }

        return $this->redirectToRoute('servicioadicional_index');
    }
}
