<?php

namespace App\Controller;

use App\Entity\Supermercado;
use App\Form\SupermercadoType;
use App\Repository\SupermercadoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/supermercado")
 */
class SupermercadoController extends AbstractController
{
    /**
     * @Route("/", name="supermercado_index", methods={"GET"})
     */
    public function index(SupermercadoRepository $supermercadoRepository): Response
    {
        return $this->render('supermercado/index.html.twig', [
            'supermercados' => $supermercadoRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="supermercado_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $supermercado = new Supermercado();
        $form = $this->createForm(SupermercadoType::class, $supermercado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($supermercado);
            $entityManager->flush();

            return $this->redirectToRoute('supermercado_index');
        }

        return $this->render('supermercado/new.html.twig', [
            'supermercado' => $supermercado,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="supermercado_show", methods={"GET"})
     */
    public function show(Supermercado $supermercado): Response
    {
        return $this->render('supermercado/show.html.twig', [
            'supermercado' => $supermercado,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="supermercado_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Supermercado $supermercado): Response
    {
        $form = $this->createForm(SupermercadoType::class, $supermercado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('supermercado_index', [
                'id' => $supermercado->getId(),
            ]);
        }

        return $this->render('supermercado/edit.html.twig', [
            'supermercado' => $supermercado,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="supermercado_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Supermercado $supermercado): Response
    {
        if ($this->isCsrfTokenValid('delete'.$supermercado->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($supermercado);
            $entityManager->flush();
        }

        return $this->redirectToRoute('supermercado_index');
    }
}
