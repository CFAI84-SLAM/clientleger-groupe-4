<?php

namespace App\Storage;


use App\Entity\Commandes;
use App\Repository\CommandesRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class CartSessionStorage {

    /**
     *
     * @var RequestStack
     */

    private $requestStack;

    /**
     *
     * @var CommandesRepository
     */

    private $cartRepository;


    /**
     * @var string
     */

    const CART_KEY_NAME = "cart_id";


    /**
     * Constructeur CartSessionStorage.
     *
     * @param RequestStack $requestStack
     * @param CommandesRepository $cartRepository
     */

    public function __construct(RequestStack $requestStack, CommandesRepository $cartRepository ) {
        $this->requestStack = $requestStack;
        $this->cartRepository = $cartRepository;
    }

    /**
     * @return Commandes|null
     */

    public function getCart(): ?Commandes
    {
        return $this->cartRepository->findOneBy([
            'id' => $this->getCartId(),
            'etat' => Commandes::STATUS_CART
        ]);
    }

    /**
     * @param Commandes $cart
     */
    public function setCart(Commandes $cart): void
    {
        $this->getSession()->set(self::CART_KEY_NAME, $cart->getIdCommandes());
    }



    private function getSession(): SessionInterface
    {
        return $this->requestStack->getSession();
    }

    /**
     * retourne l'id du panier.
     *
     * @return int|null
     */
    private function getCartId(): ?int
    {
        return $this->getSession()->get(self::CART_KEY_NAME);
    }


}