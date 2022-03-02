<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Comment ;
use App\Entity\Publication  ;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;

    /**
     * @ORM\Column(type="integer")
     */
    private $CIN;

    /**
     * @ORM\Column(type="date")
     */
    private $date_naissance;
    /**
     * @ORM\OneToMany(targetEntity=Publication::class, mappedBy="iduser")
     */
    private $idpublication;
    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="iduser")
     */
    private $idcomment;
    public function __construct()
    {
        $this->publication = new ArrayCollection();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getCIN(): ?int
    {
        return $this->CIN;
    }

    public function setCIN(int $CIN): self
    {
        $this->CIN = $CIN;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }
    /**
     * @return Collection|Publication[]
     */
    public function getIdpublication(): Collection
    {
        return $this->idpublication;
    }

    public function addIdpublication(Publication $idpublication): self
    {
        if (!$this->idpublication->contains($idpublication)) {
            $this->idpublication[] = $idpublication;
        }

        return $this;
    }

    public function removeIdpublication(Offre $idpublication): self
    {
        if ($this->idpublication->removeElement($idpublication)) {
            // set the owning side to null (unless already changed)
            if ($idpublication->getIduser() === $this) {
                $idpublication->setIduser(null);
            }
        }

        return $this;
    }
    /**
     * @return Collection|Comment[]
     */
    public function getIdcomment(): Collection
    {
        return $this->idcomment;
    }

    public function addIdcomment(Comment $idcomment): self
    {
        if (!$this->idpublication->contains($idcomment)) {
            $this->idpublication[] = $idcomment;
        }

        return $this;
    }

    public function removeIdcomment(Comment $idcomment): self
    {
        if ($this->idcomment->removeElement($idcomment)) {
            // set the owning side to null (unless already changed)
            if ($idcomment->getIduser() === $this) {
                $idcomment->setIduser(null);
            }
        }

        return $this;
    }
}
