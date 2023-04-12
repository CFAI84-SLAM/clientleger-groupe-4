<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $utilisateur = new Utilisateur();
        $utilisateur->setNom('test');
        $utilisateur->setPrenom('testeur');
        $utilisateur->setTel('0676511451');
        $utilisateur->setEmail('test@test.test');
        $utilisateur->setPassword(password_hash('test', PASSWORD_BCRYPT, ["cost" => 4]));
        $utilisateur->setAdresse('testtestestett');
        $utilisateur->setDatenaissance(\DateTime::createFromFormat('Y-m-d', "2000-05-08"));


        $manager->persist($utilisateur);

        $manager->flush();
    }


}
