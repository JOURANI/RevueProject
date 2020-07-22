<?php

namespace App\Entity;

use App\Repository\InstitutionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InstitutionRepository::class)
 */
class Institution
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $nomIns;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $villeIns;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adressIns;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Users", mappedBy="institution")
     */
    private $user;

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomIns(): ?string
    {
        return $this->nomIns;
    }

    public function setNomIns(string $nomIns): self
    {
        $this->nomIns = $nomIns;

        return $this;
    }

    public function getVilleIns(): ?string
    {
        return $this->villeIns;
    }

    public function setVilleIns(string $villeIns): self
    {
        $this->villeIns = $villeIns;

        return $this;
    }

    public function getAdressIns(): ?string
    {
        return $this->adressIns;
    }

    public function setAdressIns(?string $adressIns): self
    {
        $this->adressIns = $adressIns;

        return $this;
    }
}
