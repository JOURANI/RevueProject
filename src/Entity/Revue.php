<?php

namespace App\Entity;

use App\Repository\RevueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RevueRepository::class)
 */
class Revue
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
    private $nomRevue;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeRevue;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Article", mappedBy="revue")
     */
    private $article;

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param mixed $article
     */
    public function setArticle($article): void
    {
        $this->article = $article;
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomRevue(): ?string
    {
        return $this->nomRevue;
    }

    public function setNomRevue(string $nomRevue): self
    {
        $this->nomRevue = $nomRevue;

        return $this;
    }

    public function getTypeRevue(): ?string
    {
        return $this->typeRevue;
    }

    public function setTypeRevue(string $typeRevue): self
    {
        $this->typeRevue = $typeRevue;

        return $this;
    }
}
