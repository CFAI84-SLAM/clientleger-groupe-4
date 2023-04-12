<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Commandes
 *
 * @ORM\Table(name="Commandes", indexes={@ORM\Index(name="Id_Utilisateur", columns={"Id_Utilisateur"}), @ORM\Index(name="Id_Utilisateur_1", columns={"Id_Utilisateur_1"})})
 * @ORM\Entity(repositoryClass=CommandesRepository::class)
 */
class Commandes
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Commandes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommandes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etat", type="string", length=50, nullable=true)
     */
    private $etat = self::STATUS_CART;


    /**
     * An order that is in progress, not placed yet.
     *
     * @var string
     */

    const STATUS_CART = 'cart';


    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_de_commande", type="datetime", nullable=true)
     */
    private $dateDeCommande;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Utilisateur", referencedColumnName="Id_Utilisateur")
     * })
     */
    private $idUtilisateur;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Utilisateur_1", referencedColumnName="Id_Utilisateur")
     * })
     */
    private $idUtilisateur1;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Produit", mappedBy="idCommandes")
     */
    private $idProduit = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idProduit = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdCommandes(): ?int
    {
        return $this->idCommandes;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getDateDeCommande(): ?\DateTimeInterface
    {
        return $this->dateDeCommande;
    }

    public function setDateDeCommande(?\DateTimeInterface $dateDeCommande): self
    {
        $this->dateDeCommande = $dateDeCommande;

        return $this;
    }

    public function getIdUtilisateur(): ?Utilisateur
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(?Utilisateur $idUtilisateur): self
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    public function getIdUtilisateur1(): ?Utilisateur
    {
        return $this->idUtilisateur1;
    }

    public function setIdUtilisateur1(?Utilisateur $idUtilisateur1): self
    {
        $this->idUtilisateur1 = $idUtilisateur1;

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
            $idProduit->addIdCommande($this);
        }

        return $this;
    }

    public function removeIdProduit(Produit $idProduit): self
    {
        if ($this->idProduit->removeElement($idProduit)) {
            $idProduit->removeIdCommande($this);
        }

        return $this;
    }


}
