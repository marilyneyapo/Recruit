<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Job;
use App\Entity\Questions;
use App\Entity\Category;
use App\Entity\Candidat;
use App\Repository\CandidatRepository;
use App\Repository\JobRepository;
use App\Repository\UserRepository; 
use App\Service\AdminNotificationService;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class AdminController extends AbstractDashboardController
{
    private $userRepository;
    private $adminNotificationService;
    private $jobRepository;

    private $candidatRepository;


    public function __construct(UserRepository $userRepository, AdminNotificationService $adminNotificationService,JobRepository $jobRepository,CandidatRepository $candidatRepository)
    {
        $this->userRepository= $userRepository;
        $this->adminNotificationService = $adminNotificationService;
        $this->jobRepository= $jobRepository;
        $this->candidatRepository= $candidatRepository;

    }

    #[Route('/admin', name: 'admin_dashboard')]
    public function index(): Response
    {
        // Récupérer tous les utilisateurs
        $users = $this->userRepository->findByRole('ROLE_ADMIN');
        
        // Récupérer le nombre de nouvelles candidatures et le lien pour les notifications
        $newCandidaturesCount = $this->adminNotificationService->getNewCandidaturesCount();

         


        return $this->render('admin/dashboard.html.twig', [
            'users' => $users,
            'newCandidaturesCount' => $newCandidaturesCount,
            
        ]);
    }

    #[Route('/admin/notifications', name: 'admin_notifications')]
    public function notifications(): Response
    {
        // Récupérer les notifications
        $notifications = $this->adminNotificationService->getNotifications();
        
        return $this->render('admin/notification.html.twig', [
            'notifications' => $notifications,
        ]);
    }

    
    #[Route("/candidature/{id}", name:"candidature_details")]
    public function viewCandidature(Candidat $candidat, EntityManagerInterface $em,CandidatRepository $candidatRepository,$id)
    {
        $candidat = $candidatRepository->find($id);

        // Vérification que l'objet Candidat existe
        if (!$candidat) {
            throw $this->createNotFoundException('Candidat not found');
        }
    
        // Marquer la candidature comme lue
        if (!$candidat->isRead()) {
            $candidat->setRead(true);
            $em->flush();
        }
        // Assurez-vous que les réponses sont récupérées
        $answers = $candidat->getAnswers();

    
        return $this->render('admin/candidature_details.html.twig', [
            'candidat' => $candidat ,
            'answers' => $answers, 

        ]);
    }
    
    


    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Admin Dashboard');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),
            MenuItem::section('Entities'),
            MenuItem::linkToCrud('Jobs', 'fa fa-briefcase', Job::class)
                ->setController(JobCrudController::class),
            MenuItem::linkToCrud('Users', 'fa fa-user', User::class)
                ->setController(UserCrudController::class),
            MenuItem::linkToCrud('Categories', 'fa fa-th-large', Category::class)
                ->setController(CategoryCrudController::class),
            MenuItem::linkToCrud('Questions', 'fa fa-question-circle', Questions::class)
                ->setController(QuestionsCrudController::class),
            MenuItem::linkToRoute('Notifications', 'fa fa-bell', 'admin_notifications'),
            MenuItem::linkToRoute('Profile', 'fa fa-user-circle', 'app_profile'),
            MenuItem::linkToRoute('Logout', 'fa fa-sign-out-alt', 'app_logout'),
        ];
    }                                                                               
}
