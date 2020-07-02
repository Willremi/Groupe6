<?php

namespace App\Entity;

use App\Repository\EnergyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EnergyRepository::class)
 */
class Energy
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $nomEnergy;

    /**
     * @ORM\OneToMany(targetEntity=Vehicule::class, mappedBy="energy")
     */
    private $vehicules;

    public function __construct()
    {
        $this->vehicules = new ArrayCollection();
    }

    /**
     * @return Collection|Vehicule[]
     */
    public function getVehicules(): Collection
    {
        return $this->vehicules;
    }

    public function addVehicule(Vehicule $vehicule): self
    {
        if (!$this->vehicules->contains($vehicule)) {
            $this->vehicules[] = $vehicule;
            $vehicule->setEnergy($this);
        }

        return $this;
    }

    public function removeVehicule(Vehicule $vehicule): self
    {
        if ($this->vehicules->contains($vehicule)) {
            $this->vehicules->removeElement($vehicule);
            // set the owning side to null (unless already changed)
            if ($vehicule->getEnergy() === $this) {
                $vehicule->setEnergy(null);
            }
        }

        return $this;
    }

   

    /**
     * Get the value of nomEnergy
     */ 
    public function getNomEnergy()
    {
        return $this->nomEnergy;
    }

    /**
     * Set the value of nomEnergy
     *
     * @return  self
     */ 
    public function setNomEnergy($nomEnergy)
    {
        $this->nomEnergy = $nomEnergy;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
