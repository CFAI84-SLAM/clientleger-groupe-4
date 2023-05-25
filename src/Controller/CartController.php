<?php

namespace App\Controller;

use App\Form\CartType;
use App\Manager\CartManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Commandes;
use App\Entity\Utilisateur;

/**
 * Class CartController
 * @package App\Controller
 */

class CartController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(CartManager $cartManager, Request $request, EntityManagerInterface $entityManager): Response
    {
        $cart = $cartManager->getCurrentCart();
        $form = $this->createForm(CartType::class, $cart);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /*$cart->setUpdatedAt(new \DateTime());*/

            $cartManager->save($cart);

            return $this->redirectToRoute('panier');
        }

        return $this->render('cart/index.html.twig', [
            'cart' => $cart,
            'form' => $form->createView()
        ]);
    }
}
