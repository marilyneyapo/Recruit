<?php

namespace App\Service;
use App\Entity\Candidat;
use App\Repository\NotificationsRepository;
use App\Repository\CandidatRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Doctrine\ORM\EntityManagerInterface;

class NotificationService
{
    private $entityManager;
    private $requestStack;
    private $notifRepo;
    
    private $candidatRepo;

    public function __construct(NotificationsRepository $notifRepo,CandidatRepository $candidatRepo, EntityManagerInterface $entityManager, RequestStack $requestStack)
    {
        $this->notifRepo = $notifRepo;
        $this->entityManager = $entityManager;
        $this->requestStack = $requestStack;
        $this->candidatRepo = $candidatRepo;

    }

    public function getNewCandidaturesCount(): int
    {
        return $this->notifRepo->count(['isRead' => false]);
    }
    public function getCandidaturesWithDetails(): array 
    {
        return $this->candidatRepo->findCandidaturesWithDetails(); 
    }

    public function addNotification(string $message, Candidat $candidature): void
{
    $session = $this->requestStack->getSession();
    if ($session) {
        // Stocker les notifications dans la session pour l'admin
        $notifications = $session->get('admin_notifications', []);
        $notifications[] = [
            'message' => $message,
            'candidatures' => $candidature
        ];
        $session->set('admin_notifications', $notifications);
    } else {
        throw new \RuntimeException('Session service is not available.');
    }
}

    public function getNotifications(): array
    {
        $session = $this->requestStack->getSession();
        return $session ? $session->get('notifications', []) : [];
    }

    public function getNotificationsLink(): string
    {
        return '/admin/notification'; // Remplace par le chemin réel vers la page de notifications
    }
}
