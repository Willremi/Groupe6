<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FemmesController extends AbstractController
{
    /**
     * @Route("/femmes", name="femmes")
     */
    public function index()
    {
        return $this->render('femmes/index.html.twig', [
            'controller_name' => 'FemmesController',
        ]);
    }
}
