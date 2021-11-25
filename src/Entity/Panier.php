<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PanierRepository::class)
 */
class Panier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $valide;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datecreation;

    /**
     * @ORM\OneToMany(targetEntity=produit::class, mappedBy="panier")
     */
    private $produit;

    /**
     * @ORM\OneToOne(targetEntity=utilisateur::class, inversedBy="panier", cascade={"persist", "remove"})
     */
    private $utilisateur;

    /**
     * @ORM\OneToMany(targetEntity=Ajouter::class, mappedBy="quantite")
     */
    private $ajout;

    public function __construct()
    {
        $this->produit = new ArrayCollection();
        $this->ajout = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getValide(): ?bool
    {
        return $this->valide;
    }

    public function setValide(?bool $valide): self
    {
        $this->valide = $valide;

        return $this;
    }

    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(?\DateTimeInterface $datecreation): self
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * @return Collection|produit[]
     */
    public function getProduit(): Collection
    {
        return $this->produit;
    }

    public function addProduit(produit $produit): self
    {
        if (!$this->produit->contains($produit)) {
            $this->produit[] = $produit;
            $produit->setPanier($this);
        }

        return $this;
    }

    public function removeProduit(produit $produit): self
    {
        if ($this->produit->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getPanier() === $this) {
                $produit->setPanier(null);
            }
        }

        return $this;
    }

    public function getUtilisateur(): ?utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * @return Collection|Ajouter[]
     */
    public function getAjout(): Collection
    {
        return $this->ajout;
    }

    public function addAjout(Ajouter $ajout): self
    {
        if (!$this->ajout->contains($ajout)) {
            $this->ajout[] = $ajout;
            $ajout->setQuantite($this);
        }

        return $this;
    }

    public function removeAjout(Ajouter $ajout): self
    {
        if ($this->ajout->removeElement($ajout)) {
            // set the owning side to null (unless already changed)
            if ($ajout->getQuantite() === $this) {
                $ajout->setQuantite(null);
            }
        }

        return $this;
    }
}
