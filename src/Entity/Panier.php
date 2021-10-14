<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier", indexes={@ORM\Index(name="I_FK_PANIER_CLIENT", columns={"IDC"}), @ORM\Index(name="I_FK_PANIER_PRODUIT", columns={"IDPR"})})
 * @ORM\Entity
 */
class Panier
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idp;

    /**
     * @var int
     *
     * @ORM\Column(name="IDPR", type="integer", nullable=false)
     */
    private $idpr;

    /**
     * @var int
     *
     * @ORM\Column(name="IDC", type="integer", nullable=false)
     */
    private $idc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="QTE", type="integer", nullable=true)
     */
    private $qte;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="VALIDE", type="datetime", nullable=true)
     */
    private $valide;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATECREATION", type="datetime", nullable=true)
     */
    private $datecreation;


}
