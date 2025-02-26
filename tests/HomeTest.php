<?php

namespace App\Tests;

use Symfony\Component\Panther\PantherTestCase;

class HomeTest extends PantherTestCase
{
    public function testSomething(): void
    {
        $client = static::createPantherClient(['port' => 8001, 'browser' => static::FIREFOX]);
        $crawler = $client->request('GET', 'https://localhost:8000/');

        $this->assertSelectorTextContains('h1', 'Hello World');
    }
}
