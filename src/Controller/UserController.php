<?php
namespace App\Controller;

use App\Entity\Candidat;
use App\Entity\Job;
use App\Form\UserProfileType;
use App\Repository\JobRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();

        // Récupérer l'historique des offres
        $candidatures = $em->getRepository(Candidat::class)->findBy(['user' => $user]);

        // Extraire les offres et les CVs
        $offres = [];
        $categories = [];
        foreach ($candidatures as $candidature) {
            $job = $candidature->getJob();
            if ($job !== null) {
                $offres[] = [
                    'position' => $job->getPosition(),
                    'status' => $candidature->getStatus(),
                    'cv' => $candidature->getCv(),
                ];
                
                // Récupérer la catégorie de l'offre
                $categories[] = $job->getCategory()->getName(); // Assurez-vous que la méthode getCategory() existe
            }
        }

        // Extraire les catégories uniques
        $uniqueCategories = array_unique($categories);

        // Récupérer des suggestions basées sur les catégories
        $suggestions = [];
        foreach ($uniqueCategories as $category) {
            $categoryJobs = $em->getRepository(Job::class)->findBy(['category' => $category]);
            $suggestions = array_merge($suggestions, $categoryJobs);
        }

        $stats = [
            'totalApplications' => count($candidatures),
            'accepted' => count(array_filter($candidatures, fn($c) => $c->getStatus() === 'Accepted')),
            'pending' => count(array_filter($candidatures, fn($c) => $c->getStatus() === 'Pending')),
            'rejected' => count(array_filter($candidatures, fn($c) => $c->getStatus() === 'Rejected')),
        ];

        return $this->render('users/userspage.html.twig', [
            'user' => $user,
            'offres' => $offres,
            'stats' => $stats,
            'suggestions' => $suggestions,
        ]);
    }

    #[Route('/profile', name: 'app_profile')]
    public function profile(Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();

        // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // Créer un formulaire pour l'utilisateur
        $form = $this->createForm(UserProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($user);
            $em->flush();

            // Vous pouvez ajouter un message flash pour indiquer que les modifications ont été enregistrées
            $this->addFlash('success', 'Profil mis à jour avec succès.');

            return $this->redirectToRoute('app_user'); // Rediriger vers la même page après la soumission
        }

        // Récupérer les candidatures de l'utilisateur
        $candidatures = $em->getRepository(Candidat::class)->findBy(['user' => $user]);

        return $this->render('users/userprofile.html.twig', [
            'user' => $user,
            'candidatures' => $candidatures, // Passer les candidatures à la vue si nécessaire
            'form' => $form->createView(), // Passer le formulaire à la vue
        ]);
    }
}
