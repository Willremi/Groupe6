<?php

namespace App\Controller;

use App\Entity\Type;
use App\Form\TypeType;
use App\Repository\TypeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/admin/type')]
class TypeController extends AbstractController
{
    #[Route('/', name: 'type_index', methods: ['GET'])]
    public function index(TypeRepository $typeRepository): Response
    {
        return $this->render('admin/type/index.html.twig', [
            'types' => $typeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'type_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $type = new Type();
        $form = $this->createForm(TypeType::class, $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($type);
            $em->flush();

            return $this->redirectToRoute('type_index');
        }

        return $this->render('admin/type/new.html.twig', [
            'type' => $type,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'type_show', methods: ['GET'])]
    public function show(Type $type): Response
    {
        return $this->render('admin/type/show.html.twig', [
            'type' => $type,
        ]);
    }

    #[Route('/{id}/edit', name: 'type_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Type $type, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(TypeType::class, $type);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            return $this->redirectToRoute('type_index');
        }

        return $this->render('admin/type/edit.html.twig', [
            'type' => $type,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'type_delete', methods: ['DELETE'])]
    public function delete(Request $request, Type $type, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$type->getId(), $request->request->get('_token'))) {
            $em->remove($type);
            $em->flush();
        }

        return $this->redirectToRoute('type_index');
    }
}
