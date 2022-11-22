<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Categorie;
class Categoriefixture extends Fixture
{
    private $faker;
    
    public function __construct(){
        $this->faker=Factory::create("fr_FR");
 }

    public function load(ObjectManager $manager): void
    {
        for($i=0;$i<50;$i++){
            $cat = new Categorie();
            $cat->setNom($this->faker->lastName());
        }
        $manager->flush();
    }
}