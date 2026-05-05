<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column(type: 'json')]
    private array $roles = [];

    #[ORM\Column]
    private string $password;

    #[ORM\Column]
    private bool $isVerified = false;

    #[ORM\Column(length: 150)]
    private string $nomUser;

    #[ORM\Column(length: 160)]
    private string $prenomUser;

    #[ORM\Column(length: 255)]
    private string $adresseUser;

    #[ORM\Column(length: 100)]
    private string $cpUser;

    #[ORM\Column(length: 255)]
    private string $villeUser;

    #[ORM\Column(length: 15)]
    private string $telephoneUser;

    #[ORM\Column]
    private bool $statut = true;

    #[ORM\ManyToMany(targetEntity: Banque::class, inversedBy: 'users')]
    private Collection $banque;

    public function __construct()
    {
        $this->banque = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUserIdentifier(): string
    {
        return $this->email ?? '';
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function eraseCredentials(): void {}

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;
        return $this;
    }

    public function getNomUser(): string
    {
        return $this->nomUser;
    }

    public function setNomUser(string $nomUser): self
    {
        $this->nomUser = $nomUser;
        return $this;
    }

    public function getPrenomUser(): string
    {
        return $this->prenomUser;
    }

    public function setPrenomUser(string $prenomUser): self
    {
        $this->prenomUser = $prenomUser;
        return $this;
    }

    public function getAdresseUser(): string
    {
        return $this->adresseUser;
    }

    public function setAdresseUser(string $adresseUser): self
    {
        $this->adresseUser = $adresseUser;
        return $this;
    }

    public function getCpUser(): string
    {
        return $this->cpUser;
    }

    public function setCpUser(string $cpUser): self
    {
        $this->cpUser = $cpUser;
        return $this;
    }

    public function getVilleUser(): string
    {
        return $this->villeUser;
    }

    public function setVilleUser(string $villeUser): self
    {
        $this->villeUser = $villeUser;
        return $this;
    }

    public function getTelephoneUser(): string
    {
        return $this->telephoneUser;
    }

    public function setTelephoneUser(string $telephoneUser): self
    {
        $this->telephoneUser = $telephoneUser;
        return $this;
    }

    public function isStatut(): bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public function getBanque(): Collection
    {
        return $this->banque;
    }

    public function addBanque(Banque $banque): self
    {
        if (!$this->banque->contains($banque)) {
            $this->banque->add($banque);
        }
        return $this;
    }

    public function removeBanque(Banque $banque): self
    {
        $this->banque->removeElement($banque);
        return $this;
    }
}
