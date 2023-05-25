<?php

namespace App\Manager;

use App\Entity\Commandes;
use App\Factory\CommandesFactory;
use App\Storage\CartSessionStorage;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class CartManager
 * @package App\Manager
 */
class CartManager
{
    /**
     * @var CartSessionStorage
     */
    private $cartSessionStorage;

    /**
     * @var CommandesFactory
     */
    private $cartFactory;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * constructeur CartManager.
     *
     * @param CartSessionStorage $cartStorage
     * @param CommandesFactory $commandesFactory
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(
        CartSessionStorage $cartStorage,
        CommandesFactory $commandesFactory,
        EntityManagerInterface $entityManager
    ) {
        $this->cartSessionStorage = $cartStorage;
        $this->cartFactory = $commandesFactory;
        $this->entityManager = $entityManager;
    }

    /**
     *
     * @return Commandes
     */
    public function getCurrentCart(): Commandes
    {
        $cart = $this->cartSessionStorage->getCart();

        if (!$cart) {
            $cart = $this->cartFactory->create();
        }

        return $cart;
    }


    /**
     * @return Commandes
     */
    public function updateState(): Commandes
    {
        return $this->cartFactory->update();
    }



    /**
     * Persists le panier dans la bdd et la session.
     *
     * @param Commandes $cart
     */
    public function save(Commandes $cart): void
    {
        //persist dans la bdd
        $this->entityManager->persist($cart);
        $this->entityManager->flush();
        //persist dans la session
        $this->cartSessionStorage->setCart($cart);
    }
}