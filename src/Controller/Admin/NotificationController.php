<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\AdminNotificationService;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Candidat;

class NotificationController extends AbstractController
{
    private AdminNotificationService $adminNotificationService;
    private EntityManagerInterface $entityManager;

    public function __construct(AdminNotificationService $adminNotificationService, EntityManagerInterface $entityManager)
    {
        $this->adminNotificationService = $adminNotificationService;
        $this->entityManager = $entityManager;
    }

    #[Route('/admin/notifications', name: 'admin_notifications')]
    public function index(): Response
    {
        // Récupérer le nombre de nouvelles candidatures
        $newCandidaturesCount = $this->adminNotificationService->getNewCandidaturesCount();

        // Récupérer toutes les notifications
        $notifications = $this->adminNotificationService->getNotifications();

        // Récupérer toutes les candidatures
        $candidats = $this->entityManager->getRepository(Candidat::class)->findAll(); 

        // Générer le lien vers la page des notifications
        $notificationsLink = $this->generateUrl('admin_notifications'); // ou une autre route si besoin

        return $this->render('admin/notification.html.twig', [
            'newCandidaturesCount' => $newCandidaturesCount,
            'notifications' => $notifications,
            'candidats' => $candidats, 
            'notificationsLink' => $notificationsLink,
        ]);
    }
}
