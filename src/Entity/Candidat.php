<?php

namespace App\Entity;

use App\Repository\CandidatRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: CandidatRepository::class)]
#[ORM\HasLifecycleCallbacks]
#[ORM\Table(name: 'candidat')]
class Candidat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 20)]
    private ?string $status = null;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'candidats')]
    private ?User $user;

    #[ORM\ManyToOne(targetEntity: Job::class, inversedBy: 'candidats')]
    private ?Job $job;

    #[ORM\ManyToOne(targetEntity: CV::class, inversedBy: 'candidats')]
    private ?CV $cv;

    #[ORM\Column(type: 'boolean')]
    private ?bool $isRead = null;

    #[ORM\Column(type: 'datetime_immutable')]
    private ?\DateTimeImmutable $createdAt ;

    #[ORM\OneToMany(mappedBy: 'candidat', targetEntity: Answers::class, cascade: ['persist', 'remove'])]
    private Collection $answers;

    public function __construct()
    {
        $this->answers = new ArrayCollection();
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function isRead(): ?bool
    {
        return $this->isRead;
    }

    public function setRead(bool $isRead): self
    {
        $this->isRead = $isRead;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getCv(): ?CV
    {
        return $this->cv;
    }

    public function setCv(?CV $cv): self
    {
        $this->cv = $cv;
        return $this;
    }

    public function getJob(): ?Job
    {
        return $this->job;
    }

    public function setJob(?Job $job): self
    {
        $this->job = $job;
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

    public function getAnswers(): Collection
    {
        return $this->answers;
    }

    public function addReponse(Answers $answers): self
    {
        if (!$this->answers->contains($answers)) {
            $this->answers[] = $answers;
            $answers->setCandidat($this);
        }
        return $this;
    }

    public function removeAnswers(Answers $answers): self
    {
        if ($this->answers->removeElement($answers)) {
            if ($answers->getCandidat() === $this) {
                $answers->setCandidat(null);
            }
        }
        return $this;
    }
}
