<?php

namespace App\Controller;

use App\Entity\Universidad;
use App\Form\UniversidadType;
use App\Repository\UniversidadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/universidad")
 */
class UniversidadController extends AbstractController
{
    /**
     * @Route("/", name="universidad_index", methods={"GET"})
     */
    public function index(UniversidadRepository $universidadRepository): Response
    {
        return $this->render('universidad/index.html.twig', [
            'universidads' => $universidadRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="universidad_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $universidad = new Universidad();
        $form = $this->createForm(UniversidadType::class, $universidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($universidad);
            $entityManager->flush();

            return $this->redirectToRoute('universidad_index');
        }

        return $this->render('universidad/new.html.twig', [
            'universidad' => $universidad,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="universidad_show", methods={"GET"})
     */
    public function show(Universidad $universidad): Response
    {
        return $this->render('universidad/show.html.twig', [
            'universidad' => $universidad,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="universidad_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Universidad $universidad): Response
    {
        $form = $this->createForm(UniversidadType::class, $universidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('universidad_index', [
                'id' => $universidad->getId(),
            ]);
        }

        return $this->render('universidad/edit.html.twig', [
            'universidad' => $universidad,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="universidad_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Universidad $universidad): Response
    {
        if ($this->isCsrfTokenValid('delete'.$universidad->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($universidad);
            $entityManager->flush();
        }

        return $this->redirectToRoute('universidad_index');
    }
}
