<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AvisRepository::class)
 */
class Avis
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
    private $note;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentaire;

<<<<<<< HEAD
    /**
     * @ORM\OneToOne(targetEntity=Article::class, cascade={"persist", "remove"})
     */
    private $idA;

=======
>>>>>>> 763e0cde738fd7666661a3f1b1b529ff208d0f2f
    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< HEAD
    public function getNote(): ?float
=======
    public function getNote(): ?int
>>>>>>> 763e0cde738fd7666661a3f1b1b529ff208d0f2f
    {
        return $this->note;
    }

<<<<<<< HEAD
    public function setNote(?float $note): self
=======
    public function setNote(?int $note): self
>>>>>>> 763e0cde738fd7666661a3f1b1b529ff208d0f2f
    {
        $this->note = $note;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }
<<<<<<< HEAD

    public function getIdA(): ?Article
    {
        return $this->idA;
    }

    public function setIdA(?Article $idA): self
    {
        $this->idA = $idA;

        return $this;
    }
=======
>>>>>>> 763e0cde738fd7666661a3f1b1b529ff208d0f2f
}
