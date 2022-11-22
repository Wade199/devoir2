<?php

namespace App\Entity;

use App\Repository\BijouRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: BijouRepository::class)]
#[ApiResource(normalizationContext:['groups' => ['read']],
              itemOperations:['GET'],
              collectionOperations:['GET'])]
class Bijou
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 50)]
    private ?string $prixVente = null;

    #[ORM\Column(length: 50)]
    private ?string $prixLocalisation = null;

    #[ORM\Column(length: 30)]
    private ?string $idCatégorie = null;

    #[ORM\ManyToOne(inversedBy: 'bijous')]
    private ?Catégorie $idcégorie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrixVente(): ?string
    {
        return $this->prixVente;
    }

    public function setPrixVente(string $prixVente): self
    {
        $this->prixVente = $prixVente;

        return $this;
    }

    public function getPrixLocalisation(): ?string
    {
        return $this->prixLocalisation;
    }

    public function setPrixLocalisation(string $prixLocalisation): self
    {
        $this->prixLocalisation = $prixLocalisation;

        return $this;
    }

    public function getIdCatégorie(): ?string
    {
        return $this->idCatégorie;
    }

    public function setIdCatégorie(string $idCatégorie): self
    {
        $this->idCatégorie = $idCatégorie;

        return $this;
    }

    public function getIdcégorie(): ?Catégorie
    {
        return $this->idcégorie;
    }

    public function setIdcégorie(?Catégorie $idcégorie): self
    {
        $this->idcégorie = $idcégorie;

        return $this;
    }
}
