<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Catégorie
 *
 * @ORM\Table(name="Catégorie")
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Catégorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Categorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    private $type;

    public function getidCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }


}
