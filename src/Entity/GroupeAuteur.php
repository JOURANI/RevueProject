<?php

namespace App\Entity;

use App\Repository\GroupeAuteurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GroupeAuteurRepository::class)
 */
class GroupeAuteur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomAuteur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenomAuteur;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true, nullable=true)
     */
    private $NomIns;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true, nullable=true)
     */
    private $adresseIns;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Users", inversedBy="groupeAuteur")
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity=Article::class, mappedBy="auteurs", cascade={"remove"})
     */
    private $articles;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getNomAuteur()
    {
        return $this->nomAuteur;
    }

    /**
     * @param mixed $nomAuteur
     */
    public function setNomAuteur($nomAuteur): void
    {
        $this->nomAuteur = $nomAuteur;
    }

    /**
     * @return mixed
     */
    public function getPrenomAuteur()
    {
        return $this->prenomAuteur;
    }

    /**
     * @param mixed $prenomAuteur
     */
    public function setPrenomAuteur($prenomAuteur): void
    {
        $this->prenomAuteur = $prenomAuteur;
    }

    /**
     * @return mixed
     */
    public function getNomIns()
    {
        return $this->NomIns;
    }

    /**
     * @param mixed $NomIns
     */
    public function setNomIns($NomIns): void
    {
        $this->NomIns = $NomIns;
    }

    /**
     * @return mixed
     */
    public function getAdresseIns()
    {
        return $this->adresseIns;
    }

    /**
     * @param mixed $adresseIns
     */
    public function setAdresseIns($adresseIns): void
    {
        $this->adresseIns = $adresseIns;
    }

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

    public function getListeAuteur(): ?array
    {
        return $this->listeAuteur;
    }

    public function setListeAuteur(?array $listeAuteur): self
    {
        $this->listeAuteur = $listeAuteur;

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->addAuteur($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
            $article->removeAuteur($this);
        }

        return $this;
    }
}
