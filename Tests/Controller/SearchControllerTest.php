<?php

namespace Mihail\SearchBundle\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
/*
 * Run tests by executing command: 'phpunit -c app src/Mihail'
 * Should return 'OK (2 test, 12 assertions)'
 */
class SearchControllerTest extends WebTestCase
{
    public function testSearchControllerForm()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/search');
        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertContains('Search For:*', $client->getResponse()->getContent());
        $this->assertContains('Search Path:', $client->getResponse()->getContent());
        $this->assertContains('File Type:*', $client->getResponse()->getContent());
        $this->assertContains('Search', $client->getResponse()->getContent());
        $this->assertEquals(2, $crawler->filter('input[type=text]')->count());
        $this->assertEquals(1, $crawler->filter('select')->count());
        $this->assertGreaterThan(0, $crawler->filter('option')->count());
    }
}
