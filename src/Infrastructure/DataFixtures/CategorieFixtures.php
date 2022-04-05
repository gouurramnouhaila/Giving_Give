<?php

namespace App\DataFixtures;

use App\Factory\CategorieFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        CategorieFactory::createMany(20);
        $manager->flush();
    }
}
