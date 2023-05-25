<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i <= 4; $i++) {
            $produit = new Produit();
            $produit->setNom('test '. $i);
            $produit->setPrixht(mt_rand(10, 600));
            $produit->setTva(20);
            $produit->setPhoto('images/sushitest.jpeg');
            $produit->setidCategorie($this->getReference(('entrée')));


            $manager->persist($produit);
        }

        for ($i=5; $i <= 8; $i++) {
            $produit = new Produit();
            $produit->setNom('test '. $i);
            $produit->setPrixht(mt_rand(10, 600));
            $produit->setTva(20);
            $produit->setPhoto('images/sushitest.jpeg');
            $produit->setidCategorie($this->getReference(('plat')));


            $manager->persist($produit);
        }

        for ($i=9; $i <= 12; $i++) {
            $produit = new Produit();
            $produit->setNom('test '. $i);
            $produit->setPrixht(mt_rand(10, 600));
            $produit->setTva(20);
            $produit->setPhoto('images/sushitest.jpeg');
            $produit->setidCategorie($this->getReference(('dessert')));


            $manager->persist($produit);
        }




        $manager->flush();
    }
}
