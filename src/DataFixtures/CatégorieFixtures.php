<?php

namespace App\DataFixtures;

use App\Entity\Catégorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CatégorieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $catégorie = new Catégorie();
        $catégorie->setType('test');
        $this->addReference('test', $catégorie);

        $manager->persist($catégorie);

        $manager->flush();


    }
}
