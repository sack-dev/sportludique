<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ajoute
 *
 * @ORM\Table(name="ajoute", indexes={@ORM\Index(name="I_FK_AJOUTE_RESPONSABLE", columns={"IDR"}), @ORM\Index(name="I_FK_AJOUTE_PRODUIT", columns={"IDPR"})})
 * @ORM\Entity
 */
class Ajoute
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idr;

    /**
     * @var int
     *
     * @ORM\Column(name="IDPR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="QTE", type="integer", nullable=true)
     */
    private $qte;


}
