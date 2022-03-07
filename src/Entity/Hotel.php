<?php

namespace App\Entity;

use App\Repository\HotelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=HotelRepository::class)
 */
class Hotel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;





    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="l'adresse de la chambre est obligee")
     */
    private $adresse;




    /**
     * @ORM\Column(type="float")
     */

    private $superficie;







    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="le nom est obligé")
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="le nombre d'etoile est obligé")
     */
    private $etoile;

    /**
     * @ORM\Column(type="integer")
     * * @Assert\NotBlank(message="le nombre de chambre est obligé")
     */
    private $nombrechambre;

    /**
     * @ORM\Column(type="integer")
     */
    private $etage;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="le prix de la nuitee est obligé")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $img;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="hotel")
     */
    private $reservations;

    /**
     * @ORM\Column(type="integer")
     */
    private $promotion;






    public function __construct()
    {
        $this->reservations = new ArrayCollection();

    }



    public function getId(): ?int
    {
        return $this->id;
    }




    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }




    public function getSuperficie(): ?float
    {
        return $this->superficie;
    }

    public function setSuperficie(float $superficie): self
    {
        $this->superficie = $superficie;

        return $this;
    }



    /**
     * @return Collection|Reservation[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setIdHotel($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getIdHotel() === $this) {
                $reservation->setIdHotel(null);
            }
        }

        return $this;
    }



    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEtoile(): ?int
    {
        return $this->etoile;
    }

    public function setEtoile(int $etoile): self
    {
        $this->etoile = $etoile;

        return $this;
    }

    public function getNombrechambre(): ?int
    {
        return $this->nombrechambre;
    }

    public function setNombrechambre(int $nombrechambre): self
    {
        $this->nombrechambre = $nombrechambre;

        return $this;
    }

    public function getEtage(): ?int
    {
        return $this->etage;
    }

    public function setEtage(int $etage): self
    {
        $this->etage = $etage;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getPromotion(): ?int
    {
        return $this->promotion;
    }

    public function setPromotion(int $promotion): self
    {
        $this->promotion = $promotion;

        return $this;
    }

    public function __toString()
    {
        return $this->adresse;
    }


}