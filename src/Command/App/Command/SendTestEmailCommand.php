<?php

namespace App\Command\App\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class SendTestEmailCommand extends Command
{
    // Définition du nom de la commande
    protected static $defaultName = 'app:send-test-email';

    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Envoie un e-mail de test pour vérifier la configuration.')
            ->setHelp('Utilisez cette commande pour tester l\'envoi d\'e-mails.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $email = (new Email())
            ->from('test@example.com')
            ->to('recipient@example.com')
            ->subject('Test Email')
            ->text('Ceci est un e-mail de test.');

        try {
            $this->mailer->send($email);
            $output->writeln('<info>E-mail envoyé avec succès !</info>');
        } catch (\Exception $e) {
            $output->writeln('<error>Erreur lors de l\'envoi de l\'e-mail : ' . $e->getMessage() . '</error>');
            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}

