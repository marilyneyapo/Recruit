<?php

namespace App\Entity;

use App\Repository\NotificationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotificationsRepository::class)]
class Notifications
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $message = null;

    #[ORM\Column]
    private ?bool $isRead = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function isRead(): ?bool
    {
        return $this->isRead;
    }

    public function setRead(bool $isRead): static
    {
        $this->isRead= $isRead;

        return $this;
    }

    #[ORM\Column(type: "datetime")]
private ?\DateTimeInterface $createdAt = null;

public function getCreatedAt(): ?\DateTimeInterface
{
    return $this->createdAt;
}

public function setCreatedAt(\DateTimeInterface $createdAt): static
{
    $this->createdAt = $createdAt;

    return $this;
}

}
