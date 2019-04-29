<?php

namespace App\Controller;

use App\Entity\Casavacacional;
use App\Form\Casavacacional1Type;
use App\Repository\CasavacacionalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/casavacacional")
 */
class CasavacacionalController extends AbstractController
{
    /**
     * @Route("/", name="casavacacional_index", methods={"GET"})
     */
    public function index(CasavacacionalRepository $casavacacionalRepository): Response
    {
        return $this->render('casavacacional/index.html.twig', [
            'casavacacionals' => $casavacacionalRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="casavacacional_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $casavacacional = new Casavacacional();
        $form = $this->createForm(Casavacacional1Type::class, $casavacacional);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($casavacacional);
            $entityManager->flush();

            return $this->redirectToRoute('casavacacional_index');
        }

        return $this->render('casavacacional/new.html.twig', [
            'casavacacional' => $casavacacional,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="casavacacional_show", methods={"GET"})
     */
    public function show(Casavacacional $casavacacional): Response
    {
        return $this->render('casavacacional/show.html.twig', [
            'casavacacional' => $casavacacional,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="casavacacional_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Casavacacional $casavacacional): Response
    {
        $form = $this->createForm(Casavacacional1Type::class, $casavacacional);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('casavacacional_index', [
                'id' => $casavacacional->getId(),
            ]);
        }

        return $this->render('casavacacional/edit.html.twig', [
            'casavacacional' => $casavacacional,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="casavacacional_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Casavacacional $casavacacional): Response
    {
        if ($this->isCsrfTokenValid('delete'.$casavacacional->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($casavacacional);
            $entityManager->flush();
        }

        return $this->redirectToRoute('casavacacional_index');
    }
}
