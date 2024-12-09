<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;

class EmailService
{
    private MailerInterface $mailer;
    private string $adminEmail;
    private Environment $twig;

    public function __construct(MailerInterface $mailer, string $adminEmail, Environment $twig)
    {
        $this->mailer = $mailer;
        $this->adminEmail = $adminEmail;
        $this->twig = $twig;
    }

    public function sendApplicationNotification(string $jobPosition, string $candidateName, string $userEmail): void
    {
        if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException("Invalid email address provided: $userEmail");
        }

        $email = (new Email())
            ->from($userEmail)
            ->to($this->adminEmail)
            ->subject('New Job Application')
            ->html(
                $this->twig->render('email/job_application_notification.html.twig', [
                    'jobPosition' => htmlspecialchars($jobPosition, ENT_QUOTES, 'UTF-8'),
                    'candidateName' => htmlspecialchars($candidateName, ENT_QUOTES, 'UTF-8'),
                ])
            );

        try {
            $this->mailer->send($email);
        } catch (\Symfony\Component\Mailer\Exception\TransportExceptionInterface $e) {
            throw new \RuntimeException('Failed to send email: ' . $e->getMessage());
        }
    }
}

