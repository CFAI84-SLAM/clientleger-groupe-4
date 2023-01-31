<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consulter
 *
 * @ORM\Table(name="Consulter", indexes={@ORM\Index(name="Id_Utilisateur", columns={"Id_Utilisateur"}), @ORM\Index(name="Id_Admin", columns={"Id_Admin"}), @ORM\Index(name="IDX_EB59B9D62F21CD50", columns={"Id_Commandes"})})
 * @ORM\Entity
 */
class Consulter
{
    /**
     * @var \Admin
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Admin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Admin", referencedColumnName="Id_Admin")
     * })
     */
    private $idAdmin;

    /**
     * @var \Commandes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Commandes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Commandes", referencedColumnName="Id_Commandes")
     * })
     */
    private $idCommandes;

    /**
     * @var \Utilisateur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Utilisateur", referencedColumnName="Id_Utilisateur")
     * })
     */
    private $idUtilisateur;

    public function getIdAdmin(): ?Admin
    {
        return $this->idAdmin;
    }

    public function setIdAdmin(?Admin $idAdmin): self
    {
        $this->idAdmin = $idAdmin;

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

    public function getIdUtilisateur(): ?Utilisateur
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(?Utilisateur $idUtilisateur): self
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }


}
