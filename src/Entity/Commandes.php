<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commandes
 *
 * @ORM\Table(name="Commandes", indexes={@ORM\Index(name="Id_Menus", columns={"Id_Menus"})})
 * @ORM\Entity
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
     * @ORM\Column(name="Etat", type="string", length=50, nullable=true)
     */
    private $etat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateDeCommande", type="datetime", nullable=true)
     */
    private $datedecommande;

    /**
     * @var \Menus
     *
     * @ORM\ManyToOne(targetEntity="Menus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Menus", referencedColumnName="Id_Menus")
     * })
     */
    private $idMenus;

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

    public function getDatedecommande(): ?\DateTimeInterface
    {
        return $this->datedecommande;
    }

    public function setDatedecommande(?\DateTimeInterface $datedecommande): self
    {
        $this->datedecommande = $datedecommande;

        return $this;
    }

    public function getIdMenus(): ?Menus
    {
        return $this->idMenus;
    }

    public function setIdMenus(?Menus $idMenus): self
    {
        $this->idMenus = $idMenus;

        return $this;
    }


}
