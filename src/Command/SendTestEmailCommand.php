<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[AsCommand(
    name: 'sendTestEmailCommand',
    description: 'Add a short description for your command',
)]
class SendTestEmailCommand extends Command
{
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
            ->from('lorrainemarilyne@gmail.com')
            ->to('marilyneyapo@stratos-co.com')
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
