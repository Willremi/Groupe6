<?php

namespace App\Entity;

use App\Repository\TypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeRepository::class)]
class Type
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $nom;

    #[ORM\Column]
    private bool $statut;

    #[ORM\OneToMany(targetEntity: Lunettes::class, mappedBy: 'type')]
    private Collection $lunettes;

    #[ORM\Column]
    private float $prixTva;

    public function __construct()
    {
        $this->lunettes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
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

    public function getLunettes(): Collection
    {
        return $this->lunettes;
    }

    public function addLunette(Lunettes $lunette): self
    {
        if (!$this->lunettes->contains($lunette)) {
            $this->lunettes->add($lunette);
            $lunette->setType($this);
        }
        return $this;
    }

    public function removeLunette(Lunettes $lunette): self
    {
        if ($this->lunettes->removeElement($lunette)) {
            if ($lunette->getType() === $this) {
                $lunette->setType(null);
            }
        }
        return $this;
    }

    public function getPrixTva(): float
    {
        return $this->prixTva;
    }

    public function setPrixTva(float $prixTva): self
    {
        $this->prixTva = $prixTva;
        return $this;
    }
}
