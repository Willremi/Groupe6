<?php

namespace App\Controller;

use App\Entity\Lunettes;
use App\Form\LunettesType;
use App\Repository\LunettesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LunettesController extends AbstractController
{
    #[Route('/lunettes', name: 'lunettes_index', methods: ['GET'])]
    public function index(LunettesRepository $lunettesRepository): Response
    {
        return $this->render('lunettes/index.html.twig', [
            'lunettes' => $lunettesRepository->findAll(),
        ]);
    }

    #[Route('/admin/lunettes/new', name: 'lunettes_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $lunette = new Lunettes();
        $form = $this->createForm(LunettesType::class, $lunette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($lunette);
            $em->flush();

            return $this->redirectToRoute('lunettes_index');
        }

        return $this->render('admin/lunettes/new.html.twig', [
            'lunette' => $lunette,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/lunettes/{id}', name: 'lunettes_show', methods: ['GET'])]
    public function show(Lunettes $lunette): Response
    {
        return $this->render('lunettes/show.html.twig', [
            'lunette' => $lunette,
        ]);
    }

    #[Route('/admin/lunettes/{id}/edit', name: 'lunettes_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Lunettes $lunette, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(LunettesType::class, $lunette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('lunettes_index');
        }

        return $this->render('admin/lunettes/edit.html.twig', [
            'lunette' => $lunette,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/lunettes/{id}', name: 'lunettes_delete', methods: ['DELETE'])]
    public function delete(Request $request, Lunettes $lunette, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lunette->getId(), $request->request->get('_token'))) {
            $em->remove($lunette);
            $em->flush();
        }

        return $this->redirectToRoute('lunettes_index');
    }
}
