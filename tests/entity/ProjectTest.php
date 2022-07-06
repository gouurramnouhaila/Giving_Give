<?php


namespace App\Tests\entity;


use App\Domain\Project\Adapters\Gateway\Doctrine\Project;
use phpDocumentor\Reflection\Types\Self_;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjectTest extends WebTestCase
{

    public function testProjectValidProject() {
        $project = new Project('accessoire fitness', 'ici y a plusieurs accessoires de fitness', 'photo.jpg', 'video.mp3', 10000, null, null);

        self::bootKernel();

        $container = self::$kernel->getContainer();
        $errors = $container->get('validator')->validate($project);

        $this->assertCount(0, $errors);
    }

    public function testProjectInValidProject() {
        $project = new Project('accessoire fitness', null, 'photo.jpg', 'video.mp3', 10000, null, null);

        self::bootKernel();

        $container = self::$kernel->getContainer();
        $errors = $container->get('validator')->validate($project);

        $message = [];

        foreach ($errors as $error) {
            $messages[] = $error->getPropertyPath() . ' =>  ' . $error->getMessage();
        }

        $this->assertCount(0, $errors, implode(', ', $messages));
    }


}