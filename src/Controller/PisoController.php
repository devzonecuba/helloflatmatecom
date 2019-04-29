<?php

namespace App\Controller;

use App\Entity\Piso;
use App\Form\PisoType;
use App\Repository\PisoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/piso")
 */
class PisoController extends AbstractController
{
    /**
     * @Route("/", name="piso_index", methods={"GET"})
     */
    public function index(PisoRepository $pisoRepository): Response
    {
        return $this->render('piso/index.html.twig', [
            'pisos' => $pisoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="piso_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $piso = new Piso();
        $form = $this->createForm(PisoType::class, $piso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($piso);
            $entityManager->flush();

            return $this->redirectToRoute('piso_index');
        }

        return $this->render('piso/new.html.twig', [
            'piso' => $piso,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="piso_show", methods={"GET"})
     */
    public function show(Piso $piso): Response
    {
        return $this->render('piso/show.html.twig', [
            'piso' => $piso,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="piso_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Piso $piso): Response
    {
        $form = $this->createForm(PisoType::class, $piso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('piso_index', [
                'id' => $piso->getId(),
            ]);
        }

        return $this->render('piso/edit.html.twig', [
            'piso' => $piso,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="piso_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Piso $piso): Response
    {
        if ($this->isCsrfTokenValid('delete'.$piso->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($piso);
            $entityManager->flush();
        }

        return $this->redirectToRoute('piso_index');
    }
}
