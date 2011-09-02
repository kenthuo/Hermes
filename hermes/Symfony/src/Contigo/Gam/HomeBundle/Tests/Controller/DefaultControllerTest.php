<?php
namespace Contigo\Gam\HomeBundle\Tests\Controller;

use Symfony\Component\DomCrawler\Crawler;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * 
 * Unit Tests for default controller.
 * 
 * C:\opt\workspace-php\hermes\Symfony>phpunit -c gam/ src/Contigo/Gam/HomeBundle/Tests/Controller/
 * 
 * @author kent
 *
 */
class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
    	$crawler = new Crawler();
        $client = $this->createClient();

        $crawler = $client->request('GET', '/');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $this->assertTrue($crawler->filter('html:contains("Solution Pod")')->count() > 0);
        $this->assertTrue($crawler->filter('html:contains("Partner Pod")')->count() > 0);
        $this->assertTrue($crawler->filter('html:contains("Beacon Pod")')->count() > 0);
        $this->assertTrue($crawler->filter('html:contains("Support Pod")')->count() > 0);
        $this->assertTrue($crawler->filter('html:contains("Developer Pod")')->count() > 0);

        $this->assertTrue($crawler->filter('a:contains("Solution Pod")')->count() > 0);
        $this->assertTrue($crawler->filter('a:contains("Partner Pod")')->count() > 0);
        $this->assertTrue($crawler->filter('a:contains("Beacon Pod")')->count() > 0);
        $this->assertTrue($crawler->filter('a:contains("Support Pod")')->count() > 0);
        $this->assertTrue($crawler->filter('a:contains("Developer Pod")')->count() > 0);
    }
}
?>