<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
#[ORM\Table(name: 'categories')]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, Job>
     */
    #[ORM\OneToMany(targetEntity: Job::class, mappedBy: 'category')]
    private Collection $jobs;

    /**
     * @var Collection<int, Affiliate>
     */
    #[ORM\ManyToMany(targetEntity: Affiliate::class, mappedBy: 'categories')]
    private Collection $affiliates;
    
    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Questions::class, cascade: ['persist', 'remove'])]
    private Collection $questions;

    
    // properties
    public function __construct()
    {
        $this->jobs = new ArrayCollection();
        $this->affiliates = new ArrayCollection();
        $this->questions = new ArrayCollection();

    }

    

    // setters and getters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Job>
     */
    public function getJobs(): Collection
    {
        return $this->jobs;
    }

    public function addJob(Job $job): static
    {
        if (!$this->jobs->contains($job)) {
            $this->jobs->add($job);
            $job->setCategory($this);
        }

        return $this;
    }

    public function removeJob(Job $job): static
    {
        if ($this->jobs->removeElement($job)) {
            // set the owning side to null (unless already changed)
            if ($job->getCategory() === $this) {
                $job->setCategory(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Affiliate>
     */
    public function getAffiliates(): Collection
    {
        return $this->affiliates;
    }

    public function addAffiliate(Affiliate $affiliate): static
    {
        if (!$this->affiliates->contains($affiliate)) {
            $this->affiliates->add($affiliate);
        }

        return $this;
    }

    public function removeAffiliate(Affiliate $affiliate): static
    {
        $this->affiliates->removeElement($affiliate);

        return $this;
    }

    /**
     * Summary of getActiveJobs
     * @return ArrayCollection|Collection
     */
    public function getActiveJobs()
    {
        return $this->jobs->filter(function (Job $job) {
            return $job->getExpiresAt() > new \DateTimeImmutable();
        });
    }

    public function __toString(): string
    {     
        return $this->name;
    }

    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Questions $question): self
    {
        if (!$this->questions->contains($question)) {
            $this->questions[] = $question;
            $question->setCategory($this);
        }

        return $this;
    }

    public function removeQuestion(Questions $question): self
    {
        if ($this->questions->removeElement($question)) {
            // set the owning side to null (unless already changed)
            if ($question->getCategory() === $this) {
                $question->setCategory(null);
            }
        }

        return $this;
    }
}
