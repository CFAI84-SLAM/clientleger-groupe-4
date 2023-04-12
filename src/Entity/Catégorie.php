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
     * @ORM\Column(name="Id_Catégorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCatégorie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    private $type;

    public function getIdCatégorie(): ?int
    {
        return $this->idCatégorie;
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
