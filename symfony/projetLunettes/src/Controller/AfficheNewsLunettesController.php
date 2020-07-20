<?php

namespace App\Controller;

use App\Entity\Lunettes;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AfficheNewsLunettesController extends AbstractController
{
    /**
     * @Route("/nouveautes_lunettes", name="nouveautes_lunettes")
     */
    public function index(Request $request, PaginatorInterface $paginator)
    {   
        $donnees = $this->getDoctrine()->getRepository(Lunettes::class)->findAll();
        
        $apgination = $paginator->paginate(
            $donnees, 
            $request->query->getInt('page', 1), 
            4
        );

        return $this->render('affiche_news_lunettes/index.html.twig', [
            'controller_name' => 'Dernières nouveautés du site', 
            'pagination' => $apgination, 
        ]);
    }
}
