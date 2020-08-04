<?php

namespace App\Entity;

use App\Repository\DocumentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=DocumentRepository::class)
 */
class Document
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="An empty file is not allowed !!!")
     */
    private $docName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDocName(): ?string
    {
        return $this->docName;
    }

    public function setDocName(?string $docName): self
    {
        $this->docName = $docName;

        return $this;
    }
}
