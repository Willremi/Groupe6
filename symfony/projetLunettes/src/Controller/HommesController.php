<?php

namespace App\Controller;

use App\Entity\Genre;
use App\Entity\Lunettes;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HommesController extends AbstractController
{
    /**
     * @Route("/hommes", name="hommes")
     */
    public function index(Request $request, PaginatorInterface $paginator)
    {   
        $genre = $this->getDoctrine()->getRepository(Genre::class)->findBy([
            'nomGenre' => 'homme'
        ]);

        $donnees = $this->getDoctrine()->getRepository(Lunettes::class)->findBy([
            'genre' => $genre, 
        ]);
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
