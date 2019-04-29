<?php

namespace App\Controller;

use App\Entity\Cama;
use App\Form\CamaType;
use App\Repository\CamaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/cama")
 */
class CamaController extends AbstractController
{
    /**
     * @Route("/", name="cama_index", methods={"GET"})
     */
    public function index(CamaRepository $camaRepository): Response
    {
        return $this->render('cama/index.html.twig', [
            'camas' => $camaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="cama_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $cama = new Cama();
        $form = $this->createForm(CamaType::class, $cama);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cama);
            $entityManager->flush();

            return $this->redirectToRoute('cama_index');
        }

        return $this->render('cama/new.html.twig', [
            'cama' => $cama,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="cama_show", methods={"GET"})
     */
    public function show(Cama $cama): Response
    {
        return $this->render('cama/show.html.twig', [
            'cama' => $cama,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="cama_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Cama $cama): Response
    {
        $form = $this->createForm(CamaType::class, $cama);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cama_index', [
                'id' => $cama->getId(),
            ]);
        }

        return $this->render('cama/edit.html.twig', [
            'cama' => $cama,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="cama_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Cama $cama): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cama->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($cama);
            $entityManager->flush();
        }

        return $this->redirectToRoute('cama_index');
    }
}
