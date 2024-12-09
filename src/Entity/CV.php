<?php

namespace App\Entity;

use App\Repository\CVRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;


#[ORM\Entity(repositoryClass: CVRepository::class)]
class CV
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $score = 0.0; // Par défaut à 0

    

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'cv')]
    private ?User $user;

    #[ORM\ManyToOne(targetEntity: Job::class, inversedBy: 'cv')]
    private ?Job $job;
    #[ORM\OneToMany(mappedBy: 'cv', targetEntity: Candidat::class)]
    private Collection $candidats;

    public function __construct()
    {
        $this->candidats = new ArrayCollection();
        $this->score = 0.0; // Valeur par défaut

    }
    

    public function getScore(): ?float
    {
        return $this->score;
    }

    public function setScore(?float $score): self
    {
        $this->score = $score;

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

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    

    

    
}
