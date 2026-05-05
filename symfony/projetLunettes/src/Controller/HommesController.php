<?php

namespace App\Controller;

use App\Entity\Genre;
use App\Entity\Lunettes;
use App\Repository\GenreRepository;
use App\Repository\LunettesRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HommesController extends AbstractController
{
    #[Route('/hommes', name: 'hommes')]
    public function index(
        Request $request,
        PaginatorInterface $paginator,
        GenreRepository $genreRepository,
        LunettesRepository $lunettesRepository
    ): Response {
        // Récupération du genre "homme"
        $genre = $genreRepository->findOneBy(['nomGenre' => 'homme']);

        // Récupération des lunettes associées
        $donnees = $genre
            ? $lunettesRepository->findBy(['genre' => $genre])
            : [];

        // Pagination
        $pagination = $paginator->paginate(
            $donnees,
            $request->query->getInt('page', 1),
            3
        );

        return $this->render('hommes/index.html.twig', [
            'controller_name' => 'Lunettes pour hommes',
            'pagination' => $pagination,
        ]);
    }
}
