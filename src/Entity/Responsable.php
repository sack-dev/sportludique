<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsable
 *
 * @ORM\Table(name="responsable", indexes={@ORM\Index(name="I_FK_RESPONSABLE_UTILISATEUR", columns={"IDU"})})
 * @ORM\Entity
 */
class Responsable
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idr;

    /**
     * @var int
     *
     * @ORM\Column(name="IDU", type="integer", nullable=false)
     */
    private $idu;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMR", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $nomr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOMR", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $prenomr;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMU", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $nomu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MAIL", type="string", length=255, nullable=true, options={"fixed"=true})
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="MDP", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $mdp;


}
