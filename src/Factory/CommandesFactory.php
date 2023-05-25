<?php

namespace App\Factory;

use App\Entity\Commandes;
use App\Entity\LigneCommande;
use App\Entity\Produit;
use App\Entity\CommandeItem;
use App\Entity\Utilisateur;
use Monolog\Handler\Curl\Util;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class CommandesFactory
 * @package App\Factory
 */
class CommandesFactory extends AbstractController
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
            ->setDateDeCommande(new \DateTime())
            ->setIdUtilisateur($this->getUser());

        return $order;
    }


    /**
     *
     * @return Commandes
     */
    public function update(Commandes $order): Commandes
    {
        $order
            ->setEtat(Commandes::STATUS_COMMANDE)
            ->setIdUtilisateur($this->getUser());



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
