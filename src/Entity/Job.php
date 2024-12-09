<?php

namespace App\Entity;

use App\Repository\JobRepository;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Uid\Uuid;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;


#[ORM\Entity(repositoryClass: JobRepository::class)]
#[ORM\Table(name: 'jobs')]
#[ORM\HasLifecycleCallbacks()]
#[Vich\Uploadable]
class Job
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    private ?string $company = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $logo = null;

    #[Vich\UploadableField(mapping: 'job_logos', fileNameProperty: 'logo')]
    private ?File $logoFile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $url = null;

    #[ORM\Column(length: 255)]
    private ?string $position = null;
    
    #[ORM\Column(type: 'json')]
    private array $competencesRequises = [];
    

    #[ORM\Column(type: "integer", nullable: true)]
    private ?int $anneesExperienceRequise;

    #[ORM\Column(length: 255)]
    private ?string $location = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $howToApply = null;

    #[ORM\Column(length: 255)]
    private ?string $token = null;

    #[ORM\Column]
    private ?bool $public = null;

    #[ORM\Column]
    private ?bool $activated = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $expireAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: 'jobs')]
    #[ORM\JoinColumn(nullable: false)]

    private $category = null;

    #[ORM\OneToMany(mappedBy: 'jobs', targetEntity: Candidat::class)]
    private Collection $candidats;

    public function __construct()
    {
        $this->candidats = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): static
    {
        $this->company = $company;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(?string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getLogoFile(): ?File
    {
        return $this->logoFile;
    }

    public function setLogoFile(?File $logoFile = null): void
    {
        $this->logoFile = $logoFile;

        if (null !== $logoFile) {
           
            $this->updatedAt = new \DateTimeImmutable();
        }
    }
    
    

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): static
    {
        $this->url = $url;

        return $this;
    }
    public function getCompetencesRequises(): array
    {
        return $this->competencesRequises;
    }

    public function setCompetencesRequises(array $competencesRequises): self
    {
        $this->competencesRequises = $competencesRequises;
        return $this;
    }

    public function getAnneesExperienceRequise(): ?int
    {
        return $this->anneesExperienceRequise;
    }

    public function setAnneesExperienceRequise(?int $anneesExperienceRequise): self
    {
        $this->anneesExperienceRequise = $anneesExperienceRequise;
        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): static
    {
        $this->position = $position;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): static
    {
        $this->location = $location;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getHowToApply(): ?string
    {
        return $this->howToApply;
    }

    public function setHowToApply(string $howToApply): static
    {
        $this->howToApply = $howToApply;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): static
    {
        $this->token = Uuid::v4();
        return $this;
    }

    public function isPublic(): ?bool
    {
        return $this->public;
    }

    public function setPublic(bool $public): static
    {
        $this->public = $public;

        return $this;
    }

    public function isActivated(): ?bool
    {
        return $this->activated;
    }

    public function setActivated(bool $activated): static
    {
        $this->activated = $activated;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getExpiresAt(): ?\DateTimeImmutable
    {
        return $this->expireAt;
    }

    public function setExpiresAt(\DateTimeImmutable $expireAt): static
    {
        $this->expireAt = $expireAt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        $this->category = $category;

        return $this;
    }

    #[ORM\PrePersist()]
    public function prePersist()
    {
        $this->createdAt = new \DateTimeImmutable();
        $this->updatedAt = new \DateTimeImmutable();
        if (!$this->expireAt) {
            $this->expireAt = (clone $this->createdAt)->modify('+30 days');
        }
    }

    #[ORM\PreUpdate()]
    public function preUpdate()
    {
        $this->updatedAt = new \DateTimeImmutable();
    }

    public function isExpired(): bool
    {
        return $this->expireAt < new \DateTimeImmutable();
    }


    
    
}
