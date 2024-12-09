<?php

namespace App\Service;

use App\Entity\Candidat;
use App\Repository\CandidatRepository;
use App\Repository\UserRepository;
use Symfony\Component\Notifier\NotifierInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Mime\Email;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AdminNotificationService
{
    private NotifierInterface $notifier;
    private UserRepository $userRepository;
    private CandidatRepository $candidatRepository;
    private MailerInterface $mailer;
    private EntityManagerInterface $em;
    private UrlGeneratorInterface $urlGenerator;
    private LoggerInterface $logger;


    public function __construct(
        NotifierInterface $notifier,
        UserRepository $userRepository,
        CandidatRepository $candidatRepository,
        MailerInterface $mailer,
        EntityManagerInterface $em,
        UrlGeneratorInterface $urlGenerator,
        LoggerInterface $logger
    ) {
        $this->notifier = $notifier;
        $this->userRepository = $userRepository;
        $this->candidatRepository = $candidatRepository;
        $this->mailer = $mailer;
        $this->em = $em;
        $this->urlGenerator = $urlGenerator;
        $this->logger = $logger;
    }

    public function notifyAdminsForNewCandidature(Candidat $candidat)
    {
        // Récupérer l'utilisateur qui a soumis la candidature
        $user = $candidat->getUser();
        $userEmail = $user->getEmail();
        
        // Récupérer tous les administrateurs
        $admins = $this->userRepository->findByRole('ROLE_ADMIN');

        foreach ($admins as $admin) {
            // Création du corps de la notification
            $notification = new Notification(
                'Nouvelle candidature pour un poste',
                ['email']
            );

            $notificationContent = sprintf(
                'Un(e) candidat(e) nommé(e) %s %s a postulé pour le poste %s. Email: %s.',
                $user->getLastName(),
                $user->getFirstName(),
                $candidat->getJob()->getPosition(),
                $userEmail
            );

            // Ajouter le lien de téléchargement du CV
            $downloadLink = $this->urlGenerator->generate('app_cv_download', ['id' => $candidat->getId()], UrlGeneratorInterface::ABSOLUTE_URL);
            $notificationContent .= "\nTéléchargez le CV ici: " . $downloadLink;

            // Créer et envoyer l'e-mail
            $email = new Email();
            $email->from($userEmail)
                ->to($admin->getEmail())
                ->subject('Nouvelle candidature pour un poste')
                ->text($notificationContent);

            $this->mailer->send($email);
        }
    }

    public function getNewCandidaturesCount(): int
    {
        return $this->candidatRepository->countNewCandidatures();
    }
    public function getNotifications(): array
    {
        // Requête pour récupérer les candidatures récentes non lues
        $query = $this->em->createQueryBuilder()
            ->select('u.email, j.position, u.lastName, u.firstName')
            ->from(Candidat::class, 'c')
            ->join('c.user', 'u')
            ->leftJoin('c.job', 'j')
            ->where('c.isRead = :isRead')
            ->setParameter('isRead', false)
            ->getQuery();
    
        $results = $query->getResult(); 
    
        $notifications = []; // Pour stocker les notifications à afficher
        foreach ($results as $result) { 
            $notifications[] = [
                'email' => $result['email'],
                'offer' => $result['position'],
                'candidat' => $result['lastName'] . ' ' . $result['firstName'],
            ];
        }
    
        $this->logger->debug('Notifications:', ['notifications' => $notifications]);
    
        return $notifications; 
    }
    

    
}


