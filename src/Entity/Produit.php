<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="Produit", indexes={@ORM\Index(name="Id_Categorie", columns={"Id_Categorie"})})
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
     * @var string|null
     *
     * @ORM\Column(name="prixHT", type="decimal", precision=15, scale=3, nullable=true)
     */
    private $prixht;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tva", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $tva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Categorie", referencedColumnName="Id_Categorie")
     * })
     */
    private $idCategorie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Commandes", inversedBy="idProduit")
     * @ORM\JoinTable(name="Ligne_Commande",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Id_Produit", referencedColumnName="Id_Produit")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Id_Commandes", referencedColumnName="Id_Commandes")
     *   }
     * )
     */
    private $idCommandes = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCommandes = new \Doctrine\Common\Collections\ArrayCollection();
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

    public function getPrixht(): ?string
    {
        return $this->prixht;
    }

    public function setPrixht(?string $prixht): self
    {
        $this->prixht = $prixht;

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

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getidCategorie(): ?Categorie
    {
        return $this->idCategorie;
    }

    public function setidCategorie(?Categorie $idCategorie): self
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * @return Collection<int, Commandes>
     */
    public function getIdCommandes(): Collection
    {
        return $this->idCommandes;
    }

    public function addIdCommande(Commandes $idCommande): self
    {
        if (!$this->idCommandes->contains($idCommande)) {
            $this->idCommandes[] = $idCommande;
        }

        return $this;
    }

    public function removeIdCommande(Commandes $idCommande): self
    {
        $this->idCommandes->removeElement($idCommande);

        return $this;
    }

}
