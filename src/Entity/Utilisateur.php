<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="Utilisateur")
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Utilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUtilisateur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prénom", type="string", length=50, nullable=true)
     */
    private $prénom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tel", type="integer", nullable=true)
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail", type="string", length=50, nullable=true)
     */
    private $mail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mdp", type="string", length=50, nullable=true)
     */
    private $mdp;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Menus", inversedBy="idUtilisateur")
     * @ORM\JoinTable(name="choisir",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Id_Utilisateur", referencedColumnName="Id_Utilisateur")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Id_Menus", referencedColumnName="Id_Menus")
     *   }
     * )
     */
    private $idMenus = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idMenus = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
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

    public function getPrénom(): ?string
    {
        return $this->prénom;
    }

    public function setPrénom(?string $prénom): self
    {
        $this->prénom = $prénom;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->tel;
    }

    public function setTel(?int $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(?string $mdp): self
    {
        $this->mdp = $mdp;

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

}
