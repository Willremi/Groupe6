<?php

namespace App\Controller;

use App\Entity\Tva;
use App\Form\TvaType;
use App\Repository\TvaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/tva')]
class TvaController extends AbstractController
{
    #[Route('/', name: 'tva_index', methods: ['GET'])]
    public function index(TvaRepository $tvaRepository): Response
    {
        return $this->render('admin/tva/index.html.twig', [
            'tvas' => $tvaRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'tva_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $tva = new Tva();
        $form = $this->createForm(TvaType::class, $tva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($tva);
            $em->flush();

            return $this->redirectToRoute('tva_index');
        }

        return $this->render('admin/tva/new.html.twig', [
            'tva' => $tva,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'tva_show', methods: ['GET'])]
    public function show(Tva $tva): Response
    {
        return $this->render('admin/tva/show.html.twig', [
            'tva' => $tva,
        ]);
    }

    #[Route('/{id}/edit', name: 'tva_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tva $tva, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(TvaType::class, $tva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('tva_index');
        }

        return $this->render('admin/tva/edit.html.twig', [
            'tva' => $tva,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'tva_delete', methods: ['DELETE'])]
    public function delete(Request $request, Tva $tva, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tva->getId(), $request->request->get('_token'))) {
            $em->remove($tva);
            $em->flush();
        }

        return $this->redirectToRoute('tva_index');
    }
}
