<?php

namespace App\Factory;

use App\Entity\Commandes;
use App\Entity\LigneCommande;
use App\Entity\Produit;

/**
 * Class CommandesFactory
 * @package App\Factory
 */
class CommandesFactory
{
    /**
     * Creates an order.
     *
     * @return Commandes
     */
    public function create(): Commandes
    {
        $order = new Commandes();
        $order
            ->setEtat(Commandes::STATUS_CART)
            ->setDateDeCommande(new \DateTime());


        return $order;
    }

    /**
     * Creates an item for a product.
     *
     * @param Produit $product
     *
     * @return CommandeItem
     */
    public function createItem(Produit $product): CommandeItem
    {
        $item = new CommandeItem();
        $item->setId($product);
        $item->setQuantite(1);

        return $item;
    }
}
