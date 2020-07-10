<?php

namespace App\Entity;

use App\Repository\TypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeRepository::class)
 */
class Type
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
    private $nom;

    /**
     * @ORM\Column(type="boolean")
     */
    private $statut;

    /**
     * @ORM\OneToMany(targetEntity=Lunettes::class, mappedBy="type")
     */
    private $lunettes;

    /**
     * @ORM\Column(type="float")
     */
    private $prixTva;

    public function __construct()
    {
        $this->lunettes = new ArrayCollection();
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

    public function getStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): self
    {
        $this->statut = $statut;

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
            $lunette->setType($this);
        }

        return $this;
    }

    public function removeLunette(Lunettes $lunette): self
    {
        if ($this->lunettes->contains($lunette)) {
            $this->lunettes->removeElement($lunette);
            // set the owning side to null (unless already changed)
            if ($lunette->getType() === $this) {
                $lunette->setType(null);
            }
        }

        return $this;
    }

    
}
