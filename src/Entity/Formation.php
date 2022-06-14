<?php

namespace App\Entity;

use App\Repository\FormationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormationRepository::class)]
class Formation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $date;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $title;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $description;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $nbrhours;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $nbrdays;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

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

    public function getNbrhours(): ?int
    {
        return $this->nbrhours;
    }

    public function setNbrhours(?int $nbrhours): self
    {
        $this->nbrhours = $nbrhours;

        return $this;
    }

    public function getNbrdays(): ?int
    {
        return $this->nbrdays;
    }

    public function setNbrdays(?int $nbrdays): self
    {
        $this->nbrdays = $nbrdays;

        return $this;
    }
}
