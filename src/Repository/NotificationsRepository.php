<?php


namespace App\Repository;

use App\Entity\Notifications;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class NotificationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Notifications::class);
    }

    public function countByNewCandidatures(): int
    {
        // Logique pour compter les nouvelles candidatures
        return $this->count([]);
    }

    public function save(Notifications $notification): void
    {
        $this->_em->persist($notification);
        $this->_em->flush();
    }
}
