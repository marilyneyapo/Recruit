<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AnswersRepository;

#[ORM\Entity(repositoryClass: AnswersRepository::class)]
class Answers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Questions::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Questions $question = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $answerText = null;

    #[ORM\Column(type: 'array', nullable: true)]
    private ?array $answerOptions = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?Questions
    {
        return $this->question;
    }

    public function setQuestion(?Questions $question): self
    {
        $this->question = $question;

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

    public function getAnswerText(): ?string
    {
        return $this->answerText;
    }

    public function setAnswerText(?string $answerText): self
    {
        $this->answerText = $answerText;

        return $this;
    }

    public function getAnswerOptions(): ?array
    {
        return $this->answerOptions;
    }

    public function setAnswerOptions(?array $answerOptions): self
    {
        $this->answerOptions = $answerOptions;

        return $this;
    }
}
