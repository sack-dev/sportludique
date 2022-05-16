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
<<<<<<< HEAD
     * @ORM\Column(type="float", nullable=true)
=======
     * @ORM\Column(type="integer", nullable=true)
>>>>>>> 763e0cde738fd7666661a3f1b1b529ff208d0f2f
     */
    private $quantite;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $valide;

    /**
<<<<<<< HEAD
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\ManyToMany(targetEntity=Article::class, inversedBy="idU")
     */
    private $idA;

    /**
     * @ORM\OneToMany(targetEntity=Utilisateur::class, mappedBy="idU")
     */
    private $idU;

    public function __construct()
    {
        $this->idA = new ArrayCollection();
        $this->idU = new ArrayCollection();
=======
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
>>>>>>> 763e0cde738fd7666661a3f1b1b529ff208d0f2f
    }

    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< HEAD
    public function getQuantite(): ?float
=======
    public function getQuantite(): ?int
>>>>>>> 763e0cde738fd7666661a3f1b1b529ff208d0f2f
    {
        return $this->quantite;
    }

<<<<<<< HEAD
    public function setQuantite(?float $quantite): self
=======
    public function setQuantite(?int $quantite): self
>>>>>>> 763e0cde738fd7666661a3f1b1b529ff208d0f2f
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

<<<<<<< HEAD
    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;
=======
    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(?\DateTimeInterface $datecreation): self
    {
        $this->datecreation = $datecreation;
>>>>>>> 763e0cde738fd7666661a3f1b1b529ff208d0f2f

        return $this;
    }

    /**
<<<<<<< HEAD
     * @return Collection|Article[]
     */
    public function getIdA(): Collection
    {
        return $this->idA;
    }

    public function addIdA(Article $idA): self
    {
        if (!$this->idA->contains($idA)) {
            $this->idA[] = $idA;
=======
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
>>>>>>> 763e0cde738fd7666661a3f1b1b529ff208d0f2f
        }

        return $this;
    }

<<<<<<< HEAD
    public function removeIdA(Article $idA): self
    {
        $this->idA->removeElement($idA);
=======
    public function getUtilisateur(): ?utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;
>>>>>>> 763e0cde738fd7666661a3f1b1b529ff208d0f2f

        return $this;
    }

    /**
<<<<<<< HEAD
     * @return Collection|Utilisateur[]
     */
    public function getIdU(): Collection
    {
        return $this->idU;
    }

    public function addIdU(Utilisateur $idU): self
    {
        if (!$this->idU->contains($idU)) {
            $this->idU[] = $idU;
            $idU->setIdU($this);
=======
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
>>>>>>> 763e0cde738fd7666661a3f1b1b529ff208d0f2f
        }

        return $this;
    }

<<<<<<< HEAD
    public function removeIdU(Utilisateur $idU): self
    {
        if ($this->idU->removeElement($idU)) {
            // set the owning side to null (unless already changed)
            if ($idU->getIdU() === $this) {
                $idU->setIdU(null);
=======
    public function removeAjout(Ajouter $ajout): self
    {
        if ($this->ajout->removeElement($ajout)) {
            // set the owning side to null (unless already changed)
            if ($ajout->getQuantite() === $this) {
                $ajout->setQuantite(null);
>>>>>>> 763e0cde738fd7666661a3f1b1b529ff208d0f2f
            }
        }

        return $this;
    }
}
