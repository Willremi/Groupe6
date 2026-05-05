<?php

namespace App\Entity;

use App\Repository\LunettesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use DateTime;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: LunettesRepository::class)]
#[ORM\Table(name: 'lunettes')]
#[Vich\Uploadable]
class Lunettes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $prixLunettes = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?int $quantite = null;

    #[ORM\Column]
    private bool $statut;

    #[ORM\Column(length: 255)]
    private string $nom;

    #[ORM\OneToMany(targetEntity: Panier::class, mappedBy: 'lunettes')]
    private Collection $paniers;

    #[ORM\ManyToOne(targetEntity: Couleur::class, inversedBy: 'lunettes')]
    private ?Couleur $couleur = null;

    #[ORM\ManyToOne(targetEntity: Type::class, inversedBy: 'lunettes')]
    private ?Type $type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo = null;

    #[Assert\Image(mimeTypes: ['image/jpeg', 'image/jpg', 'image/png'])]
    #[Vich\UploadableField(mapping: 'product_image', fileNameProperty: 'photo')]
    private ?File $imageFile = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?DateTime $updated_at = null;

    #[ORM\ManyToOne(targetEntity: Genre::class, inversedBy: 'lunettes')]
    private ?Genre $genre = null;

    public function __construct()
    {
        $this->paniers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixLunettes(): ?int
    {
        return $this->prixLunettes;
    }

    public function setPrixLunettes(?int $prixLunettes): self
    {
        $this->prixLunettes = $prixLunettes;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPaniers(): Collection
    {
        return $this->paniers;
    }

    public function addPanier(Panier $panier): self
    {
        if (!$this->paniers->contains($panier)) {
            $this->paniers->add($panier);
            $panier->setLunettes($this);
        }
        return $this;
    }

    public function removePanier(Panier $panier): self
    {
        if ($this->paniers->removeElement($panier)) {
            if ($panier->getLunettes() === $this) {
                $panier->setLunettes(null);
            }
        }
        return $this;
    }

    public function getCouleur(): ?Couleur
    {
        return $this->couleur;
    }

    public function setCouleur(?Couleur $couleur): self
    {
        $this->couleur = $couleur;
        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getGenre(): ?Genre
    {
        return $this->genre;
    }

    public function setGenre(?Genre $genre): self
    {
        $this->genre = $genre;
        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;
        return $this;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageFile(?File $imageFile): void
    {
        $this->imageFile = $imageFile;

        if ($imageFile instanceof UploadedFile) {
            $this->updated_at = new DateTime();
        }
    }
}
