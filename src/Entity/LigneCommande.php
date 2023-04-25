<?php

namespace App\Entity;

use App\Repository\LigneCommandeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 * @ORM\Table(name="Ligne_Commande", indexes={@ORM\Index(name="Id_Produit", columns={"Id_Produit"}), @ORM\Index(name="Id_Commandes", columns={"Id_Commandes"})})
 * @ORM\Entity(repositoryClass=LigneCommandeRepository::class)
 */
class LigneCommande
{


    /**
     * @ORM\ManyToOne(targetEntity=Produit::class)
     * @ORM\JoinColumn(nullable=false)
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @ORM\ManyToOne(targetEntity=Commandes::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idCommandes;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\NotBlank()
     * @Assert\GreaterThanOrEqual(1)
     */
    private $quantite;

    /**
     * @ORM\Column(type="decimal", precision=15, scale=3, nullable=true)
     */
    private $prixHT;

    /**
     * @ORM\Column(type="decimal", precision=15, scale=2, nullable=true)
     */
    private $prixTTC;

    /**
     * @ORM\Column(type="decimal", precision=15, scale=2, nullable=true)
     */
    private $tva;


    public function getIdProduit(): ?int
    {
        return $this->idProduit;
    }

    public function setIdProduit(int $idProduit): self
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    public function getIdCommandes(): ?Commandes
    {
        return $this->idCommandes;
    }

    public function setIdCommandes(?Commandes $idCommandes): self
    {
        $this->idCommandes = $idCommandes;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrixHT(): ?string
    {
        return $this->prixHT;
    }

    public function setPrixHT(?string $prixHT): self
    {
        $this->prixHT = $prixHT;

        return $this;
    }

    public function getPrixTTC(): ?string
    {
        return $this->prixTTC;
    }

    public function setPrixTTC(?string $prixTTC): self
    {
        $this->prixTTC = $prixTTC;

        return $this;
    }

    public function getTva(): ?string
    {
        return $this->tva;
    }

    public function setTva(?string $tva): self
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Calculates the item total.
     *
     * @return float|int
     */
    public function getTotal(): float
    {
        return $this->getIdProduit()->getPrixHT() * $this->getQuantite();
    }
}
