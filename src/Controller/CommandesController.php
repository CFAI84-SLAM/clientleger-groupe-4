<?php

namespace App\Controller;

use App\Form\CartType;
use App\Manager\CartManager;
use App\Factory\CommandesFactory;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Commandes;
use App\Entity\Utilisateur;

/**
 * Class CommandesController
 * @package App\Controller
 */

class CommandesController extends AbstractController
{
    /**
     * @Route("/commande", name="commande")
     */
    public function index(CartManager $cartManager, Request $request, EntityManagerInterface $entityManager, CommandesFactory $commandesFactory): Response
    {
        $cart = $cartManager->getCurrentCart();
        $commandesFactory->update($cart);

        $entityManager->persist($cart);
        $entityManager->flush();

        return $this->render('commande/index.html.twig', [
            'cart' => $cart,

        ]);
    }
}
