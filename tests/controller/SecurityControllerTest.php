<?php


namespace App\Tests\controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class SecurityControllerTest extends WebTestCase
{
    public function testLoginWithBadCredentiels() {

        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        $form = $crawler->selectButton('login')->form([
            'email' => 'admin@email.com',
            'password' => '11234'
        ]);

        $client->submit($form);

        $this->assertSelectorTextContains('h1', 'login form');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);

    }
}