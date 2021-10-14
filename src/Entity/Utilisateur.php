<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="IDU", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idu;

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
