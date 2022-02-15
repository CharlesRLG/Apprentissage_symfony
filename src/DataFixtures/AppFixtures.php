<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{

public function load(ObjectManager $manager)
    {
    $faker = Factory::create('fr_FR');
    // création de 20 utilisateurs
    for ($i = 0; $i < 20; $i++) {
        $user = new User();
        $user->setFirstName($faker->firstName);
        $user->setLastName($faker->lastName);
        $user->setBirthday($faker->dateTime);
        $manager->persist($user); // garder les user en mémoire
        }

    $manager->flush(); // envoie sur la bdd
    }
}
