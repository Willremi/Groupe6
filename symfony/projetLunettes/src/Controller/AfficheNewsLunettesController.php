<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AfficheNewsLunettesController extends AbstractController
{
    /**
     * @Route("/nouveautes_lunettes", name="nouveautes_lunettes")
     */
    public function index()
    {
        return $this->render('affiche_news_lunettes/index.html.twig', [
            // 'controller_name' => 'AfficheNewsLunettesController',
        ]);
    }
}
