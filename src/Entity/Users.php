<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 * @UniqueEntity(fields={"username"}, message="There is already an account with this username")
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class Users implements UserInterface, \Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Vous devez indiquer votre nom")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Vous devez indiquer votre prenom")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     * @Assert\NotBlank(message="Vous devez indiquer votre adresse")
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email()
     * @Assert\NotBlank(message="Vous devez indiquer votre email")
     * @Assert\Email(message="The email '{{ value }}' is not a valid email.")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Vous devez indiquer votre password")
     */
    private $password;

    /**
     * @Assert\NotBlank(message="Vous devez indiquer votre password")
     * @Assert\EqualTo(propertyPath="password", message="La confirmation du mot de passe ne correspond pas")
     */
    public $retypePassword;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Vous devez indiquer votre username")
     */
    private $username;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="json_array", nullable=true)
     */
    private $roles = [];

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isValide;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Institution", inversedBy="user")
     */
    private $institution;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="User", orphanRemoval=true)
     */
    private $articles;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\GroupeAuteur", mappedBy="user")
     */
    private $groupeAuteur;


    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getGroupeAuteur()
    {
        return $this->groupeAuteur;
    }

    /**
     * @param mixed $groupeAuteur
     */
    public function setGroupeAuteur($groupeAuteur): void
    {
        $this->groupeAuteur = $groupeAuteur;
    }

    /**
     * @return Institution
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * @param Institution $institution
     */
    public function setInstitution($institution): void
    {
        $this->institution = $institution;
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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getRoles()
    {
        $roles = $this->roles;
        // give everyone ROLE_USER!
//        if (!in_array('ROLE_CHERCHEUR', $roles)) {
//            $roles[] = 'ROLE_CHERCHEUR';
//        }
        return $roles;
    }

    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }

    public function getIsValide(): ?bool
    {
        return $this->isValide;
    }

    public function setIsValide(bool $isValide): self
    {
        $this->isValide = $isValide;

        return $this;
    }

    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->password,
            $this->nom,
            $this->prenom,
            $this->adresse ,
            $this->email ,

        ]);
    }

    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            $this->nom,
            $this->prenom,
            $this->adresse ,
            $this->email ,
            ) = unserialize($serialized, ['allowed_classes' => false]);
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
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
            $article->setUser($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
            // set the owning side to null (unless already changed)
            if ($article->getUser() === $this) {
                $article->setUser(null);
            }
        }

        return $this;
    }
}
