<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        /*
         *Utilisateur Admin
         *
         */
        $prehash = password_hash('admin', PASSWORD_BCRYPT, ["cost" => 4]);
        $finalhash = substr_replace($prehash, 'a', 2, 1);

        $utilisateur = new Utilisateur();
        $utilisateur->setNom('admin');
        $utilisateur->setPrenom('root');
        $utilisateur->setTel('0676511451');
        $utilisateur->setEmail('admin@fastsushi.com');
        $utilisateur->setPassword($finalhash);
        $utilisateur->setAdresse('5 rue des admins');
        $utilisateur->setRoles(["ROLE_ADMIN"]);
        $utilisateur->setDatenaissance(\DateTime::createFromFormat('Y-m-d', "1989-05-08"));


        $manager->persist($utilisateur);



        /*
        *Utilisateur Préparateur
        *
        */

        $prehash = password_hash('preparateur', PASSWORD_BCRYPT, ["cost" => 4]);
        $finalhash = substr_replace($prehash, 'a', 2, 1);

        $utilisateur = new Utilisateur();
        $utilisateur->setNom('préparateur');
        $utilisateur->setPrenom('fastsushi');
        $utilisateur->setTel('0676511451');
        $utilisateur->setEmail('preparateur@fastsushi.com');
        $utilisateur->setPassword($finalhash);
        $utilisateur->setAdresse('3 allées des préparateurs');
        $utilisateur->setRoles(["ROLE_PREP"]);
        $utilisateur->setDatenaissance(\DateTime::createFromFormat('Y-m-d', "2000-06-12"));


        $manager->persist($utilisateur);


        /*
        *Utilisateur client
        *
        */

        $prehash = password_hash('client', PASSWORD_BCRYPT, ["cost" => 4]);
        $finalhash = substr_replace($prehash, 'a', 2, 1);

        $utilisateur = new Utilisateur();
        $utilisateur->setNom('client');
        $utilisateur->setPrenom('fastsushi');
        $utilisateur->setTel('0676511451');
        $utilisateur->setEmail('client@fastsushi.com');
        $utilisateur->setPassword($finalhash);
        $utilisateur->setAdresse('12 rue du client');
        $utilisateur->setDatenaissance(\DateTime::createFromFormat('Y-m-d', "2002-01-01"));


        $manager->persist($utilisateur);

        $manager->flush();
    }


}
