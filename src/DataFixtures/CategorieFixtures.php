<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $Categorie = new Categorie();
        $Categorie->setType('entrée');
        $this->addReference('entrée', $Categorie);
        $manager->persist($Categorie);

        $Categorie = new Categorie();
        $Categorie->setType('plat');
        $this->addReference('plat', $Categorie);
        $manager->persist($Categorie);

        $Categorie = new Categorie();
        $Categorie->setType('dessert');
        $this->addReference('dessert', $Categorie);

        $manager->persist($Categorie);

        $manager->flush();


    }
}
