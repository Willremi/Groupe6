<?php

namespace App\Controller;

use App\Entity\Banque;
use App\Form\BanqueType;
use App\Repository\BanqueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/banque')]
class BanqueController extends AbstractController
{
    #[Route('', name: 'banque_index', methods: ['GET'])]
    public function index(BanqueRepository $banqueRepository): Response
    {
        return $this->render('banque/index.html.twig', [
            'banques' => $banqueRepository->findAll(),
        ]);
    }

    #[Route('/admin/new', name: 'banque_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $banque = new Banque();
        $form = $this->createForm(BanqueType::class, $banque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($banque);
            $em->flush();

            return $this->redirectToRoute('banque_index');
        }

        return $this->render('admin/banque/new.html.twig', [
            'banque' => $banque,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'banque_show', methods: ['GET'])]
    public function show(Banque $banque): Response
    {
        return $this->render('banque/show.html.twig', [
            'banque' => $banque,
        ]);
    }

    #[Route('/{id}/edit', name: 'banque_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Banque $banque, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(BanqueType::class, $banque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('banque_index');
        }

        return $this->render('admin/banque/edit.html.twig', [
            'banque' => $banque,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'banque_delete', methods: ['DELETE'])]
    public function delete(Request $request, Banque $banque, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$banque->getId(), $request->request->get('_token'))) {
            $em->remove($banque);
            $em->flush();
        }

        return $this->redirectToRoute('banque_index');
    }
}
