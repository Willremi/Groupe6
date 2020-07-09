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
use Exception;

/**
 * @ORM\Entity(repositoryClass=LunettesRepository::class)
 * @ORM\Entity
 * @ORM\Table(name="lunettes")
 * @Vich\Uploadable()
 */
class Lunettes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $prixLunettes;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @ORM\Column(type="boolean")
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity=Panier::class, mappedBy="lunettes")
     */
    private $paniers;

    /**
     * @ORM\ManyToOne(targetEntity=Couleur::class, inversedBy="lunettes")
     */
    private $couleur;

    /**
     * @ORM\ManyToOne(targetEntity=Type::class, inversedBy="lunettes")
     */
    private $type;

    public function __construct()
    {
        $this->paniers = new ArrayCollection();
    }

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
	 * @var File|null
	 * @Assert\Image(mimeTypes={"image/jpeg", "image/jpg", "image/png"})
	 * @Vich\UploadableField(mapping="product_image", fileNameProperty="photo")
	 *
	 */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var null|DateTime
     */
    private $updated_at;

    
    /**
	 * @param File|null $imageFile
	 *
	 * @throws Exception
	 */
	public function setImageFile( ?File $imageFile ): void {
			$this->imageFile = $imageFile;
			if($this->imageFile instanceof UploadedFile){
				$this->updated_at = new \DateTime('now');
			}
			
		}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixLunettes(): ?string
    {
        return $this->prixLunettes;
    }

    public function setPrixLunettes(?string $prixLunettes): self
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

    public function getStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): self
    {
        $this->statut = $statut;

        return $this;
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

    /**
     * @return Collection|Panier[]
     */
    public function getPaniers(): Collection
    {
        return $this->paniers;
    }

    public function addPanier(Panier $panier): self
    {
        if (!$this->paniers->contains($panier)) {
            $this->paniers[] = $panier;
            $panier->setLunettes($this);
        }

        return $this;
    }

    public function removePanier(Panier $panier): self
    {
        if ($this->paniers->contains($panier)) {
            $this->paniers->removeElement($panier);
            // set the owning side to null (unless already changed)
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

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get @Assert\Image(mimeTypes={"image/jpeg", "image/jpg", "image/png"})
     *
     * @return  File|null
     */ 
    public function getImageFile()
    {
        return $this->imageFile;
    }

}
