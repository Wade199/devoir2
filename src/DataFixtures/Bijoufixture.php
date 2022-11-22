<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\User;
use App\Entity\Bijou;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class Bijoufixture extends Fixture
{
    private $faker;

    public function __construct(){
        $this->faker=Factory::create("fr_FR");
    }

    public function load(ObjectManager $manager): void
    {
        for($i=0;$i<10;$i++){
            $bijou = new Bijou();
            $bijou->setdescription($this->faker->paragraph());
            $bijou->setPrixVente($this->faker->sentence());
            $this->addReference('Bijou'.$i, $bijou);
        }

        $manager->flush();
    } 

    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
}
}
