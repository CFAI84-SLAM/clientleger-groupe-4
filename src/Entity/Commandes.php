<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CommandesRepository;

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
     * @ORM\OneToMany(targetEntity=CommandeItem::class, mappedBy="orderRef", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $items;

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
        $this->items = new ArrayCollection();
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

    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(CommandeItem $produit): self
    {
        foreach ($this->getItems() as $existingItem) {
            // The item already exists, update the quantity
            if ($existingItem->equals($produit)) {
                $existingItem->setQuantite(
                    $existingItem->getQuantite() + $produit->getQuantite()
                );
                return $this;
            }
        }

        $this->items[] = $produit;
        $produit->setOrderRef($this);

        return $this;
    }

    public function removeItem(): self
    {
        foreach ($this->getItems() as $item) {
            $this->removeItem($item);
        }

        return $this;
    }

    /**
     * Calculates the order total.
     *
     * @return float
     */
    public function getTotal(): float
    {
        $total = 0;

        foreach ($this->getItems() as $produit) {
            $total += $produit->getTotal();
        }

        return $total;
    }


}
