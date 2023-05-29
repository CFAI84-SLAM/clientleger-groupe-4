<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\AddToCartType;
use App\Manager\CartManager;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ProductController
 * @package App\Controller
 */

class ProductController extends AbstractController
{
    /**
     * Affichage de la page du détail produit
     * @Route("/produit/{id}", name="produit.detail")
     */
    public function detail(Produit $product, Request $request, CartManager $cartManager): Response
    {
        $form = $this->createForm(AddToCartType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $item = $form->getData();
            $item->setProduit($product);

            $cart = $cartManager->getCurrentCart();
            $cart
                ->addItem($item);

            $cartManager->save($cart);

            return $this->redirectToRoute('produit.detail', ['id' => $product->getIdProduit()]);
        }

        return $this->render('product/detail.html.twig', [
            'product' => $product,
            'form' => $form->createView()
        ]);
    }
}
