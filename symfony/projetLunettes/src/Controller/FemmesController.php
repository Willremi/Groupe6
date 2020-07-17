<?php

namespace App\Controller;

use App\Entity\Genre;
use App\Entity\Lunettes;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FemmesController extends AbstractController
{
    /**
     * @Route("/femmes", name="femmes")
     */
    public function index(Request $request, PaginatorInterface $paginator)
    {   
        $genre = $this->getDoctrine()->getRepository(Genre::class)->findBy([
            'nomGenre' => 'femme'
        ]);

        $donnees = $this->getDoctrine()->getRepository(Lunettes::class)->findBy([
            'genre' => $genre, 
        ]);
        $pagination = $paginator->paginate(
            $donnees, 
            $request->query->getInt('page', 1), 
            3
        );

        return $this->render('femmes/index.html.twig', [
            'controller_name' => 'Lunettes pour femmes', 
            'pagination' => $pagination, 
        ]);
    }
}
