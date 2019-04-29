<?php

namespace App\Controller;

use App\Entity\Zona;
use App\Form\ZonaType;
use App\Repository\ZonaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/zona")
 */
class ZonaController extends AbstractController
{
    /**
     * @Route("/", name="zona_index", methods={"GET"})
     */
    public function index(ZonaRepository $zonaRepository): Response
    {
        return $this->render('zona/index.html.twig', [
            'zonas' => $zonaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="zona_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $zona = new Zona();
        $form = $this->createForm(ZonaType::class, $zona);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($zona);
            $entityManager->flush();

            return $this->redirectToRoute('zona_index');
        }

        return $this->render('zona/new.html.twig', [
            'zona' => $zona,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="zona_show", methods={"GET"})
     */
    public function show(Zona $zona): Response
    {
        return $this->render('zona/show.html.twig', [
            'zona' => $zona,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="zona_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Zona $zona): Response
    {
        $form = $this->createForm(ZonaType::class, $zona);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('zona_index', [
                'id' => $zona->getId(),
            ]);
        }

        return $this->render('zona/edit.html.twig', [
            'zona' => $zona,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="zona_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Zona $zona): Response
    {
        if ($this->isCsrfTokenValid('delete'.$zona->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($zona);
            $entityManager->flush();
        }

        return $this->redirectToRoute('zona_index');
    }
}
