<?php

namespace App\Entity;

use App\Repository\ParticipationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticipationRepository::class)]
class Participation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_personne = null;

    #[ORM\Column]
    private ?int $id_projet = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPersonne(): ?int
    {
        return $this->id_personne;
    }

    public function setIdPersonne(int $id_personne): static
    {
        $this->id_personne = $id_personne;

        return $this;
    }

    public function getIdProjet(): ?int
    {
        return $this->id_projet;
    }

    public function setIdProjet(int $id_projet): static
    {
        $this->id_projet = $id_projet;

        return $this;
    }
}
