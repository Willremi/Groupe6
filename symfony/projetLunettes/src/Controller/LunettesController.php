<?php

namespace App\Controller;

use App\Entity\Lunettes;
use App\Form\LunettesType;
use App\Repository\LunettesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LunettesController extends AbstractController
{
    /**
     * @Route("/lunettes", name="lunettes_index", methods={"GET"})
     */
    public function index(LunettesRepository $lunettesRepository): Response
    {
        return $this->render('lunettes/index.html.twig', [
            'lunettes' => $lunettesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin/lunettes/new", name="lunettes_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $lunette = new Lunettes();
        $form = $this->createForm(LunettesType::class, $lunette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($lunette);
            $entityManager->flush();

            return $this->redirectToRoute('lunettes_index');
        }

        return $this->render('admin/lunettes/new.html.twig', [
            'lunette' => $lunette,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/lunettes/{id}", name="lunettes_show", methods={"GET"})
     */
    public function show(Lunettes $lunette): Response
    {
        return $this->render('lunettes/show.html.twig', [
            'lunette' => $lunette,
        ]);
    }

    /**
     * @Route("/admin/lunettes/{id}/edit", name="lunettes_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Lunettes $lunette): Response
    {
        $form = $this->createForm(LunettesType::class, $lunette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lunettes_index');
        }

        return $this->render('admin/lunettes/edit.html.twig', [
            'lunette' => $lunette,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/lunettes/{id}", name="lunettes_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Lunettes $lunette): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lunette->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($lunette);
            $entityManager->flush();
        }

        return $this->redirectToRoute('lunettes_index');
    }
}
