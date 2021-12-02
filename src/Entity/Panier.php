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
     * @ORM\Column(type="float", nullable=true)
     */
    private $quantite;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $valide;

    /**
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
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?float
    {
        return $this->quantite;
    }

    public function setQuantite(?float $quantite): self
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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
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
        }

        return $this;
    }

    public function removeIdA(Article $idA): self
    {
        $this->idA->removeElement($idA);

        return $this;
    }

    /**
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
        }

        return $this;
    }

    public function removeIdU(Utilisateur $idU): self
    {
        if ($this->idU->removeElement($idU)) {
            // set the owning side to null (unless already changed)
            if ($idU->getIdU() === $this) {
                $idU->setIdU(null);
            }
        }

        return $this;
    }
}
