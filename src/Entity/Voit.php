<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voit
 *
 * @ORM\Table(name="voit", indexes={@ORM\Index(name="I_FK_VOIT_CLIENT", columns={"IDC"}), @ORM\Index(name="I_FK_VOIT_PRODUIT", columns={"IDPR"})})
 * @ORM\Entity
 */
class Voit
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idc;

    /**
     * @var int
     *
     * @ORM\Column(name="IDPR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idpr;


}
