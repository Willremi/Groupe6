<?php

namespace App\Entity;

use App\Repository\PanierRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PanierRepository::class)]
class Panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private \DateTimeInterface $date;

    #[ORM\Column(nullable: true)]
    private ?int $quantite = null;

    #[ORM\Column]
    private bool $statut;

    #[ORM\ManyToOne(targetEntity: Lunettes::class, inversedBy: 'paniers')]
    private ?Lunettes $lunettes = null;

    #[ORM\OneToOne(targetEntity: Tva::class, cascade: ['persist', 'remove'])]
    private ?Tva $tva = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): \DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): self
    {
        $this->quantite = $quantite;
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

    public function getLunettes(): ?Lunettes
    {
        return $this->lunettes;
    }

    public function setLunettes(?Lunettes $lunettes): self
    {
        $this->lunettes = $lunettes;
        return $this;
    }

    public function getTva(): ?Tva
    {
        return $this->tva;
    }

    public function setTva(?Tva $tva): self
    {
        $this->tva = $tva;
        return $this;
    }
}
