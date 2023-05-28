<?php

namespace App\Entity;

use App\Repository\CommandeItemRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandeItemRepository::class)
 */
class CommandeItem
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Produit::class)
     * @ORM\JoinColumn(name="Id_Produit", referencedColumnName="Id_Produit")
     */
    private $produit;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\ManyToOne(targetEntity=Commandes::class, inversedBy="items")
     * @ORM\JoinColumn(name="Id_Commandes", referencedColumnName="Id_Commandes")
     */
    private $orderRef;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduit(): ?Produit
    {
        return $this->produit;
    }

    public function setProduit(?Produit $produit): self
    {
        $this->produit = $produit;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }



    public function getOrderRef(): ?Commandes
    {
        return $this->orderRef;
    }

    public function setOrderRef(?Commandes $orderRef): self
    {
        $this->orderRef = $orderRef;

        return $this;
    }

    /**
     * Tests if the given item given corresponds to the same order item.
     *
     * @param CommandeItem $produit
     *
     * @return bool
     */
    public function equals(CommandeItem $produit): bool
    {
        return $this->getProduit()->getIdProduit() === $produit->getProduit()->getIdProduit();
    }

    /**
     * Calculates the item total.
     *
     * @return float|int
     */
    public function getTotal(): float
    {
        return ($this->getProduit()->getPrixht() * $this->getQuantite())*1.20;
    }

    /**

     *
     * @return float|int
     */
    public function getTotalHT(): float
    {
        return $this->getProduit()->getPrixht() * $this->getQuantite();
    }
}
