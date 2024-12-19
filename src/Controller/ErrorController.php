<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ErrorController extends AbstractController
{
    public function showErrorPage(Request $request): Response
    {
        // Si la requête provient déjà d'EasyAdmin et n'est pas une requête sur le tableau de bord
        if ($this->isEasyAdminRequest($request) && !$this->isEasyAdminDashboard($request)) {
            return $this->redirectToRoute('admin_dashboard'); // Redirige vers le tableau de bord admin
        }

        // Si la requête provient d'une erreur, affiche la page d'erreur
        $code = $request->attributes->get('code', 404);
        
        return $this->render('error/error404.html.twig', [
            'code' => $code,
        ]);
    }

    private function isEasyAdminRequest(Request $request): bool
    {
        // Vérifie si la requête provient d'EasyAdmin
        return strpos($request->getPathInfo(), '/admin') === 0; // "/admin" est l'URL de base de EasyAdmin
    }

    private function isEasyAdminDashboard(Request $request): bool
    {
        // Vérifie si la requête correspond au tableau de bord d'EasyAdmin
        return $request->getPathInfo() === '/admin/dashboard'; // Assurez-vous que cette route est correcte selon votre configuration
    }
}


