<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ingrédients
 *
 * @ORM\Table(name="Ingrédients")
 * @ORM\Entity
 */
class Ingrédients
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Ingredients", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIngredients;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nom", type="integer", nullable=true)
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Produit", mappedBy="idIngrédients")
     */
    private $idProduit = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idProduit = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdIngrédients(): ?int
    {
        return $this->idIngrédients;
    }

    public function getNom(): ?int
    {
        return $this->nom;
    }

    public function setNom(?int $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getIdProduit(): Collection
    {
        return $this->idProduit;
    }

    public function addIdProduit(Produit $idProduit): self
    {
        if (!$this->idProduit->contains($idProduit)) {
            $this->idProduit[] = $idProduit;
            $idProduit->addIdIngrDient($this);
        }

        return $this;
    }

    public function removeIdProduit(Produit $idProduit): self
    {
        if ($this->idProduit->removeElement($idProduit)) {
            $idProduit->removeIdIngrDient($this);
        }

        return $this;
    }

}
