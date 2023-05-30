<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i <= 7; $i++) {
            switch ($i) {

                case 1:
                    $nom = "Salade Choux";
                    $photo = 'images/salchoux.jpg';
                    break;

                case 2:
                    $nom = "Salade Wakame";
                    $photo = 'images/salwakame.jpg';
                    break;
                case 3:
                    $nom = "Salade Fève de soja";
                    $photo = 'images/salsoja.jpg';
                    break;
                case 4:
                    $nom = "Salade Crevettes";
                    $photo = 'images/salcrev.jpg';
                    break;
                case 5:
                    $nom = "Soupe Miso";
                    $photo = 'images/miso.jpg';
                    break;
                case 6:
                    $nom = "Ramen crevettes";
                    $photo = 'images/ramcrev.jpg';
                    break;
                case 7:
                    $nom = "Ramen Poulet";
                    $photo = 'images/rampoulet.jpg';
                    break;
            }

            $produit = new Produit();
            $produit->setNom($nom);
            $produit->setPrixht(mt_rand(5, 10));
            $produit->setTva(20);
            $produit->setPhoto($photo);
            $produit->setidCategorie($this->getReference(('entrée')));


            $manager->persist($produit);
        }

        for ($i=1; $i <= 8; $i++) {
            switch ($i) {

                case 1:
                    $nom = "Makis";
                    $photo = 'images/makis.jpg';
                    break;

                case 2:
                    $nom = "California Rolls";
                    $photo = 'images/california.jpg';
                    break;
                case 3:
                    $nom = "Spring Rolls";
                    $photo = 'images/spring.jpg';
                    break;
                case 4:
                    $nom = "Sushi Saumon";
                    $photo = 'images/sushisaumon.jpg';
                    break;
                case 5:
                    $nom = "Sushi Thon";
                    $photo = 'images/sushithon.jpg';
                    break;
                case 6:
                    $nom = "Sushi Crevettes";
                    $photo = 'images/sushicrevettes.jpg';
                    break;
                case 7:
                    $nom = "Sushi Daurade";
                    $photo = 'images/sushidaurade.jpg';
                    break;
                case 8:
                    $nom = "Sushi Anguille";
                    $photo = 'images/sushianguille.jpg';
                    break;
            }

            $produit = new Produit();
            $produit->setNom($nom);
            $produit->setPrixht(mt_rand(10, 20));
            $produit->setTva(20);
            $produit->setPhoto($photo);
            $produit->setidCategorie($this->getReference(('plat')));


            $manager->persist($produit);
        }

        for ($i=1; $i <= 3; $i++) {
            switch ($i) {

                case 1:
                    $nom = "Moelleux Chocolat";
                    $photo = 'images/moelleux.jpg';
                    break;

                case 2:
                    $nom = "Maki Nutella banane";
                    $photo = 'images/nutban.jpg';
                    break;
                case 3:
                    $nom = "Crispy Nutella pané";
                    $photo = 'images/crispy.jpg';
                    break;
            }

            $produit = new Produit();
            $produit->setNom($nom);
            $produit->setPrixht(mt_rand(5, 8));
            $produit->setTva(20);
            $produit->setPhoto($photo);
            $produit->setidCategorie($this->getReference(('dessert')));


            $manager->persist($produit);
        }




        $manager->flush();
    }
}
