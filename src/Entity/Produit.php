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

//GETTERS

    function getIdpr():?int{
        return $this->$idpr;
    }
    function getProduit():string{
        return $this->$produit;
    }

    function getDescritption():string{
        return $this->$description;
    }

    function getPrix():int{
        return $this->$prix;
    }
    public function getImage(): ?string
    {
        return $this->image;
    }
//SETTERS


public function setProduit(string $produit): self
{
    $this-> $produit = $produit;

    return $this;
}


public function setDescription(string $description): self
{
    $this-> $description = $description;

    return $this;
}
public function setPrix(int $prix): self
{
    $this-> $prix = $prix;

    return $this;
}
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
