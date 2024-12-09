<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\SecurityRequestAttributes;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class UserAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';

    public function __construct(private UrlGeneratorInterface $urlGenerator)
    {
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email');
        $password = $request->request->get('password');
        $firstName = $request->request->get('firstName');
        $lastName = $request->request->get('lastName');
    
        // Store first and last name in the session
        $request->getSession()->set('first_name', $firstName);
        $request->getSession()->set('last_name', $lastName);
    
        // Set email as last username
        $request->getSession()->set(SecurityRequestAttributes::LAST_USERNAME, $email);
    
        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($password),
            [
                new CsrfTokenBadge('authenticate', $request->get('_csrf_token')),
                new RememberMeBadge(),
            ]
        );
    }
    

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        $session = $request->getSession();
    
        // Vérifiez si la session existe avant d'appeler getTargetPath
        if ($session && $targetPath = $this->getTargetPath($session, $firewallName)) {
            return new RedirectResponse($targetPath);
        }
    
        // Récupérer l'ID de l'offre dans la session (si disponible)
        $jobId = $session->get('job_id');
    
        // Si l'ID de l'offre est présent, redirigez vers la page du CV avec cet ID
        if ($jobId) {
            return new RedirectResponse($this->urlGenerator->generate('app_cv', ['id' => $jobId]));
        }
    
        // Sinon, redirigez vers la page d'accueil par défaut
        return new RedirectResponse($this->urlGenerator->generate('home'));
    }
    


    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
