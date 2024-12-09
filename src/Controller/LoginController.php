<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route('/login_check', name: 'app_login_check')]
    public function loginCheck(): void
    {
        // Methode gérée automatiquement par
    }


    #[Route('/redirect_after_login', name: 'app_redirect_after_login')]
    public function redirectAfterLogin(): Response
    {
        $user = $this->getUser();

        if (in_array('ROLE_ADMIN', $user->getRoles(), true)) {
            return $this->redirectToRoute('admin_dashboard'); // Page admin
        }
    
        // Sinon, rediriger vers la page utilisateur
        return $this->redirectToRoute('app_cv', ['id' => $job->getId()]);
    }

    #[Route(path: '/logout', name: 'app_logout', methods: ['POST'])]
    public function logout(): Response
    {
        // Symfony gère automatiquement la déconnexion
        return new Response();
    }
}