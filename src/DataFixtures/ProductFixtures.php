<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i <= 10; $i++) {
            $produit = new Produit();
            $produit->setNom('test '. $i);
            $produit->setPrixht(mt_rand(10, 600));
            $produit->setTva(20);
            $produit->setPhoto('images/sushitest.jpeg');
            $produit->setidCategorie($this->getReference(('test')));


            $manager->persist($produit);
        }


        $manager->flush();
    }
}
