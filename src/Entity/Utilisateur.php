<?php

namespace App\Entity;


use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UtilisateurRepository::class)
 */
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\OneToOne(targetEntity=Panier::class, mappedBy="utilisateur", cascade={"persist", "remove"})
     */
    private $panier;

    /**
     * @ORM\OneToMany(targetEntity=Ajouter::class, mappedBy="Utilisateur")
     */
    private $ajout;

    public function __construct()
    {
        $this->ajout = new ArrayCollection();
    }




    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }



    /**
     * @see PasswordAuthenticatedUserInterface
     */


     //GETTERS

     
    public function getId(): ?int
    {
        return $this->id;
    }
        /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }




    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */

    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }
    public function getPassword(): string
    {
        return $this->password;
    }


    //SETTERS


    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPanier(): ?Panier
    {
        return $this->panier;
    }

    public function setPanier(?Panier $panier): self
    {
        // unset the owning side of the relation if necessary
        if ($panier === null && $this->panier !== null) {
            $this->panier->setUtilisateur(null);
        }

        // set the owning side of the relation if necessary
        if ($panier !== null && $panier->getUtilisateur() !== $this) {
            $panier->setUtilisateur($this);
        }

        $this->panier = $panier;

        return $this;
    }

    /**
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
            $ajout->setUtilisateur($this);
        }

        return $this;
    }

    public function removeAjout(Ajouter $ajout): self
    {
        if ($this->ajout->removeElement($ajout)) {
            // set the owning side to null (unless already changed)
            if ($ajout->getUtilisateur() === $this) {
                $ajout->setUtilisateur(null);
            }
        }

        return $this;
    }
}
