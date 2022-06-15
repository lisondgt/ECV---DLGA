<?php

namespace App\Entity;

use App\Repository\FormationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: FormationRepository::class)]
class Formation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $titre;

    #[
        ORM\Column(type: 'text'),
        Assert\NotBlank(message: 'post.blank_content'),
        Assert\Length(min: 10, minMessage: 'formation.too_short_content')
    ]
    private $description;

    #[
        ORM\ManyToMany(targetEntity: Thematiques::class),
        Assert\Count(max: 4, maxMessage: 'formation.too_many_tags')
    ]
    private $thematiques;

    #[ORM\Column(type: 'datetime')]
    private $dateDebut;

    #[ORM\Column(type: 'datetime')]
    private $dateFin;

    #[
        ORM\ManyToMany(targetEntity: Avocats::class),
        Assert\Count(max: 4, maxMessage: 'formation.too_many_tags')
    ]
    private $avocats;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $presentiel;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $formationDLGA;

    public function __construct()
    {
        $this->thematiques = new ArrayCollection();
        $this->avocats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
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

    /**
     * @return Collection<int, Thematiques>
     */
    public function getThematiques(): Collection
    {
        return $this->thematiques;
    }

    public function addThematique(Thematiques $thematique): self
    {
        if (!$this->thematiques->contains($thematique)) {
            $this->thematiques[] = $thematique;
        }

        return $this;
    }

    public function removeThematique(Thematiques $thematique): self
    {
        $this->thematiques->removeElement($thematique);

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * @return Collection<int, Avocats>
     */
    public function getAvocats(): Collection
    {
        return $this->avocats;
    }

    public function addAvocat(Avocats $avocat): self
    {
        if (!$this->avocats->contains($avocat)) {
            $this->avocats[] = $avocat;
        }

        return $this;
    }

    public function removeAvocat(Avocats $avocat): self
    {
        $this->avocats->removeElement($avocat);

        return $this;
    }

    public function isPresentiel(): ?bool
    {
        return $this->presentiel;
    }

    public function setPresentiel(?bool $presentiel): self
    {
        $this->presentiel = $presentiel;

        return $this;
    }

    public function isFormationDLGA(): ?bool
    {
        return $this->formationDLGA;
    }

    public function setFormationDLGA(?bool $formationDLGA): self
    {
        $this->formationDLGA = $formationDLGA;

        return $this;
    }
}
