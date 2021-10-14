<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis", indexes={@ORM\Index(name="I_FK_AVIS_CLIENT", columns={"IDC"}), @ORM\Index(name="I_FK_AVIS_PRODUIT", columns={"IDPR"})})
 * @ORM\Entity
 */
class Avis
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ida;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IDPR", type="integer", nullable=true)
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
     * @ORM\Column(name="NOTE", type="integer", nullable=true)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COMMENTAIRE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $commentaire;


}
