<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $abstract;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $keyword;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="integer")
     */
    private $size;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="articles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $User;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="article")
     * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id", nullable=true)
     */
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Revue", inversedBy="article")
     * @ORM\JoinColumn(name="revue_id", referencedColumnName="id", nullable=true)
     */
    private $revue;

    /**
     * @ORM\ManyToMany(targetEntity=GroupeAuteur::class, inversedBy="articles")
     */
    private $auteurs;

    public function __construct()
    {
        $this->auteurs = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie): void
    {
        $this->categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getRevue()
    {
        return $this->revue;
    }

    /**
     * @param mixed $revue
     */
    public function setRevue($revue): void
    {
        $this->revue = $revue;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAbstract(): ?string
    {
        return $this->abstract;
    }

    public function setAbstract(string $abstract): self
    {
        $this->abstract = $abstract;

        return $this;
    }

    public function getKeyword(): ?string
    {
        return $this->keyword;
    }

    public function setKeyword(string $keyword): self
    {
        $this->keyword = $keyword;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->User;
    }

    public function setUser(Users $User): self
    {
        $this->User = $User;

        return $this;
    }

    /**
     * @return Collection|GroupeAuteur[]
     */
    public function getAuteurs(): Collection
    {
        return $this->auteurs;
    }

    public function addAuteur(GroupeAuteur $auteur): self
    {
        if (!$this->auteurs->contains($auteur)) {
            $this->auteurs[] = $auteur;
        }

        return $this;
    }

    public function removeAuteur(GroupeAuteur $auteur): self
    {
        if ($this->auteurs->contains($auteur)) {
            $this->auteurs->removeElement($auteur);
        }

        return $this;
    }
}
