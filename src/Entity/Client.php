<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client", indexes={@ORM\Index(name="I_FK_CLIENT_UTILISATEUR", columns={"IDU"})})
 * @ORM\Entity
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idc;

    /**
     * @var int
     *
     * @ORM\Column(name="IDU", type="integer", nullable=false)
     */
    private $idu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMP", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $nomp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOMP", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $prenomp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TEL", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $tel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSE", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $adresse;

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
