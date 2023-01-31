<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="Produit")
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Catégorie", type="integer", nullable=true)
     */
    private $catégorie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="custom", type="integer", nullable=true)
     */
    private $custom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prix_HT", type="string", length=50, nullable=true)
     */
    private $prixHt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ventes", type="integer", nullable=true)
     */
    private $ventes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Photo", type="string", length=50, nullable=true)
     */
    private $photo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Menus", inversedBy="idProduit")
     * @ORM\JoinTable(name="faire_partie",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Id_Produit", referencedColumnName="Id_Produit")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Id_Menus", referencedColumnName="Id_Menus")
     *   }
     * )
     */
    private $idMenus = array();

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ingrédients", inversedBy="idProduit")
     * @ORM\JoinTable(name="composer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Id_Produit", referencedColumnName="Id_Produit")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Id_Ingredients", referencedColumnName="Id_Ingredients")
     *   }
     * )
     */
    private $idIngrédients = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idMenus = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idIngrédients = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdProduit(): ?int
    {
        return $this->idProduit;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCatégorie(): ?int
    {
        return $this->catégorie;
    }

    public function setCatégorie(?int $catégorie): self
    {
        $this->catégorie = $catégorie;

        return $this;
    }

    public function getCustom(): ?int
    {
        return $this->custom;
    }

    public function setCustom(?int $custom): self
    {
        $this->custom = $custom;

        return $this;
    }

    public function getPrixHt(): ?string
    {
        return $this->prixHt;
    }

    public function setPrixHt(?string $prixHt): self
    {
        $this->prixHt = $prixHt;

        return $this;
    }

    public function getVentes(): ?int
    {
        return $this->ventes;
    }

    public function setVentes(?int $ventes): self
    {
        $this->ventes = $ventes;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return Collection<int, Menus>
     */
    public function getIdMenus(): Collection
    {
        return $this->idMenus;
    }

    public function addIdMenu(Menus $idMenu): self
    {
        if (!$this->idMenus->contains($idMenu)) {
            $this->idMenus[] = $idMenu;
        }

        return $this;
    }

    public function removeIdMenu(Menus $idMenu): self
    {
        $this->idMenus->removeElement($idMenu);

        return $this;
    }

    /**
     * @return Collection<int, Ingrédients>
     */
    public function getIdIngrédients(): Collection
    {
        return $this->idIngrédients;
    }

    public function addIdIngrDient(Ingrédients $idIngrDient): self
    {
        if (!$this->idIngrédients->contains($idIngrDient)) {
            $this->idIngrédients[] = $idIngrDient;
        }

        return $this;
    }

    public function removeIdIngrDient(Ingrédients $idIngrDient): self
    {
        $this->idIngrédients->removeElement($idIngrDient);

        return $this;
    }

}
