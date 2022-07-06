<?php


namespace App\Tests\controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class HomeControllerTest extends WebTestCase
{
    public function testStatusHelloPage() {
        $client = static::createClient();
        $client->request('GET', '/hello');

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }

    public function testH1HelloPage() {
        $client = static::createClient();
        $client->request('GET', '/hello');

        $this->assertSelectorTextContains("h1", "it's me nouhaila");
    }

    public function testAuthPageIsRetricted() {
        $client = static::createClient();
        $client->request('GET', '/auth');

        $this->assertResponseStatusCodeSame(Response::HTTP_UNAUTHORIZED);
    }

    public function testRedirectLogin() {
        $client = static::createClient();
        $client->request('GET', '/auth');

        $this->assertResponseRedirects('/login');
    }
}