<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrer
 *
 * @ORM\Table(name="Administrer", indexes={@ORM\Index(name="Id_Admin", columns={"Id_Admin"}), @ORM\Index(name="Id_Menus", columns={"Id_Menus"}), @ORM\Index(name="Id_Ingredients", columns={"Id_Ingredients"}), @ORM\Index(name="IDX_996CF99877D87F1B", columns={"Id_Produit"})})
 * @ORM\Entity
 */
class Administrer
{
    /**
     * @var \Ingrédients
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Ingrédients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Ingredients", referencedColumnName="Id_Ingredients")
     * })
     */
    private $idIngrédients;

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
     * @var \Produit
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Produit", referencedColumnName="Id_Produit")
     * })
     */
    private $idProduit;

    /**
     * @var \Menus
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Menus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Menus", referencedColumnName="Id_Menus")
     * })
     */
    private $idMenus;

    public function getIdIngrédients(): ?Ingrédients
    {
        return $this->idIngrédients;
    }

    public function setIdIngrédients(?Ingrédients $idIngrédients): self
    {
        $this->idIngrédients = $idIngrédients;

        return $this;
    }

    public function getIdAdmin(): ?Admin
    {
        return $this->idAdmin;
    }

    public function setIdAdmin(?Admin $idAdmin): self
    {
        $this->idAdmin = $idAdmin;

        return $this;
    }

    public function getIdProduit(): ?Produit
    {
        return $this->idProduit;
    }

    public function setIdProduit(?Produit $idProduit): self
    {
        $this->idProduit = $idProduit;

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
