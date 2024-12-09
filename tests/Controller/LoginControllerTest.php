<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginControllerTest extends WebTestCase
{
    private $client;

    protected function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function testLoginPage()
    {
        $crawler = $this->client->request('GET', '/login');

        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
        $this->assertStringContainsString('Login', $crawler->filter('h1')->text());
    }

    public function testLoginCheck()
    {
        $this->client->request('POST', '/login_check');

        // This route is handled automatically by Symfony, so we just check the status code
        $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    }

    
    public function testLogout()
    {
        $this->client->request('POST', '/logout');

        // Symfony handles logout automatically, so we just check the status code
        $this->assertEquals(302, $this->client->getResponse()->getStatusCode());
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        $this->client = null;
    }
}
