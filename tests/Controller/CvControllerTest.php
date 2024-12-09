<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Entity\Job;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User; 
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class CvControllerTest extends WebTestCase
{
    private $client;
    private $entityManager;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->entityManager = static::getContainer()->get(EntityManagerInterface::class);

        // Supprimer l'utilisateur test existant pour éviter les doublons
        $existingUser = $this->entityManager->getRepository(User::class)->findOneBy(['email' => 'test@example.com']);
        if ($existingUser) {
            $this->entityManager->remove($existingUser);
            $this->entityManager->flush();
        }

        // Crée et connecte un utilisateur de test
        $this->loginTestUser();
    }

    protected function createTestUser(): User
    {
        $user = new User();
        $user->setEmail('test@example.com');
        $user->setRoles(['ROLE_USER']);

        $passwordHasher = static::getContainer()->get(UserPasswordHasherInterface::class);
        $hashedPassword = $passwordHasher->hashPassword($user, 'testpassword');
        $user->setPassword($hashedPassword);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return $user;
    }

    protected function loginTestUser(): void
    {
        $user = $this->createTestUser();
        $this->client->loginUser($user);
    }

    public function testCvRouteAccess()
    {
        $job = $this->entityManager->getRepository(Job::class)->find(1);
        if (!$job) {
            $this->markTestSkipped('Job with ID 1 not found.');
        }

        $this->client->request('GET', '/cv/1');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }

   /* public function testCvFormSubmission()
    {
        $job = $this->entityManager->getRepository(Job::class)->find(1);
        if (!$job) {
            $this->markTestSkipped('Job with ID 1 not found.');
        }

        $crawler = $this->client->request('GET', '/cv/1');
        $form = $crawler->selectButton('Submit')->form();

        // Assurez-vous que le fichier de test existe avant le test
        $testFilePath = __DIR__ . '/tests/controller/cv.pdf';
        if (!file_exists($testFilePath)) {
            $this->markTestSkipped('Test CV file not found at: ' . $testFilePath);
        }

        $form['cvFile']->upload($testFilePath);
        $this->client->submit($form);

        $this->assertResponseRedirects(); // Vérifie qu'une redirection a eu lieu

        // Optionnel : Suivre la redirection et vérifier le contenu final
        $this->client->followRedirect();
        $this->assertStringContainsString('Success', $this->client->getResponse()->getContent());
    }*/

    protected function tearDown(): void
    {
        parent::tearDown();
        $this->client = null;
        $this->entityManager = null;
    }
} 