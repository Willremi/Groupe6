<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HommesController extends AbstractController
{
    /**
     * @Route("/hommes", name="hommes")
     */
    public function index()
    {
        return $this->render('hommes/index.html.twig', [
            'controller_name' => 'HommesController',
        ]);
    }
}
