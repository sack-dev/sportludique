<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDPR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRODUIT", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $produit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $description;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PRIX", type="float", precision=10, scale=0, nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }


}
