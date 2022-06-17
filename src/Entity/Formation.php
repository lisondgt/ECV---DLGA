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

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $formationCnfpt;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $urlFormation;

    #[
        ORM\ManyToMany(targetEntity: Thematiques::class),
        Assert\Count(max: 4, maxMessage: 'formation.too_many_tags')
    ]
    private $thematiques;

    #[
        ORM\ManyToMany(targetEntity: Avocats::class),
        Assert\Count(max: 4, maxMessage: 'formation.too_many_tags')
    ]
    private $avocats;

    #[ORM\Column(type: 'datetime')]
    private $dateDebut;

    #[ORM\Column(type: 'datetime')]
    private $dateFin;

    #[ORM\Column(type: 'boolean', nullable: true)]
    private $presentiel;

    #[
        ORM\ManyToMany(targetEntity: SecteurActivite::class),
        Assert\Count(max: 4, maxMessage: 'secteurActivite.too_many_tags')
    ]
    private $secteurActivite;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $ville;

    #[
        ORM\Column(type: 'text'),
        Assert\NotBlank(message: 'post.blank_content'),
        Assert\Length(min: 2, minMessage: 'formation.too_short_content')
    ]
    private $description;

    #[
        ORM\Column(type: 'text'),
        Assert\NotBlank(message: 'post.blank_content'),
        Assert\Length(min: 2, minMessage: 'formation.too_short_content')
    ]
    private $programme;

    #[ORM\Column(type: 'array', nullable: true)]
    private $objectifs = [];

    #[ORM\Column(type: 'array', nullable: true)]
    private $modalites = [];

    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'formation')]
    private $users;

    public function __construct()
    {
        $this->thematiques = new ArrayCollection();
        $this->avocats = new ArrayCollection();
        $this->users = new ArrayCollection();
        $this->secteurActivite = new ArrayCollection();
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

    public function isFormationCnfpt(): ?bool
    {
        return $this->formationCnfpt;
    }

    public function setFormationCnfpt(?bool $formationCnfpt): self
    {
        $this->formationCnfpt = $formationCnfpt;

        return $this;
    }

    public function getUrlFormation(): ?string
    {
        return $this->urlFormation;
    }

    public function setUrlFormation(?string $urlFormation): self
    {
        $this->urlFormation = $urlFormation;

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

    public function isPresentiel(): ?bool
    {
        return $this->presentiel;
    }

    public function setPresentiel(?bool $presentiel): self
    {
        $this->presentiel = $presentiel;

        return $this;
    }

    /**
     * @return Collection<int, SecteurActivite>
     */
    public function getSecteurActivite(): Collection
    {
        return $this->secteurActivite;
    }

    public function addSecteurActivite(SecteurActivite $secteurActivite): self
    {
        if (!$this->secteurActivite->contains($secteurActivite)) {
            $this->secteurActivite[] = $secteurActivite;
        }

        return $this;
    }

    public function removeSecteurActivite(SecteurActivite $secteurActivite): self
    {
        $this->secteurActivite->removeElement($secteurActivite);

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

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

    public function getProgramme(): ?string
    {
        return $this->programme;
    }

    public function setProgramme(string $programme): self
    {
        $this->programme = $programme;

        return $this;
    }

    public function getObjectifs(): ?array
    {
        return $this->objectifs;
    }

    public function setObjectifs(?array $objectifs): self
    {
        $this->objectifs = $objectifs;

        return $this;
    }

    public function getModalites(): ?array
    {
        return $this->modalites;
    }

    public function setModalites(?array $modalites): self
    {
        $this->modalites = $modalites;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addFormation($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeFormation($this);
        }

        return $this;
    }
}
