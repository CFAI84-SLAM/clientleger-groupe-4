<?php

namespace App\Controller;

use App\Form\CartType;
use App\Manager\CartManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CartController
 * @package App\Controller
 */

class CartController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(CartManager $cartManager): Response
    {
        $cart = $cartManager->getCurrentCart();
        $form = $this->createForm(CartType::class, $cart);

        return $this->render('panier/index.html.twig', [
            'cart' => $cart,
            'form' => $form->createView()
        ]);
    }
}