<?php

namespace App\Controller;

use App\Repository\LunettesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @Route("/panier", name="cart_index")
     */
    public function index(SessionInterface $session, LunettesRepository $lunettesRepository)
    {   
        $panier = $session->get('panier', []);

        $panierWithData = [];

        foreach ($panier as $id => $quantity) {
            $panierWithData[] = [
                'lunettes' => $lunettesRepository->find($id), 
                'quantity' => $quantity
            ];
        }

        $total = 0;

        foreach ($panierWithData as $item) {
            $total += $item['lunettes']->getPrixLunettes() * $item['quantity'];

        }

        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController', 
            'items' => $panierWithData, 
            'total' => $total, 
        ]);
    }

    /**
     * @Route("/admin/panier/add/{id}", name="cart_add")
     */
    public function add($id, SessionInterface $session) {
         
        $panier = $session->get('panier', []);

        if(!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute("cart_index");
        // https://www.youtube.com/watch?v=_tWL-QDFuQ4 chap 6 30min54
    }

    /**
     * @Route("/admin/panier/remove/{id}", name="cart_remove")
     */
    public function remove($id, SessionInterface $session) {
        $panier = $session->get('panier', []);

        if(!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('cart_index');

    }
}
