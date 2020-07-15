<?php

namespace App\Entity;

use App\Repository\GenreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GenreRepository::class)
 */
class Genre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nomGenre;

    /**
     * @ORM\OneToMany(targetEntity=Lunettes::class, mappedBy="genre")
     */
    private $lunettes;

    /**
     * @ORM\Column(type="boolean")
     */
    private $statut;

    public function __construct()
    {
        $this->lunettes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomGenre(): ?string
    {
        return $this->nomGenre;
    }

    public function setNomGenre(string $nomGenre): self
    {
        $this->nomGenre = $nomGenre;

        return $this;
    }

    /**
     * @return Collection|Lunettes[]
     */
    public function getLunettes(): Collection
    {
        return $this->lunettes;
    }

    public function addLunette(Lunettes $lunette): self
    {
        if (!$this->lunettes->contains($lunette)) {
            $this->lunettes[] = $lunette;
            $lunette->setGenre($this);
        }

        return $this;
    }

    public function removeLunette(Lunettes $lunette): self
    {
        if ($this->lunettes->contains($lunette)) {
            $this->lunettes->removeElement($lunette);
            // set the owning side to null (unless already changed)
            if ($lunette->getGenre() === $this) {
                $lunette->setGenre(null);
            }
        }

        return $this;
    }

    public function getStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): self
    {
        $this->statut = $statut;

        return $this;
    }
}
