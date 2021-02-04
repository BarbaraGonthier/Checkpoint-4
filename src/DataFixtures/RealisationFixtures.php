<?php


namespace App\DataFixtures;


use App\Entity\Category;
use App\Entity\Realisation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RealisationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i <= 8; $i++) {
            $realisation = new Realisation();
            $realisation->setName('bathroom.jpg');
            $realisation->setCategory($this->getReference('category_0'));
            $manager->persist($realisation);
            $this->addReference('realisation_' . $i, $realisation);
        }

        for ($i = 9; $i <= 17; $i++) {
            $realisation = new Realisation();
            $realisation->setName('kitchen.jpeg');
            $realisation->setCategory($this->getReference('category_1'));
            $manager->persist($realisation);
            $this->addReference('realisation_' . $i, $realisation);
        }
        for ($i = 18; $i <= 26; $i++) {
            $realisation = new Realisation();
            $realisation->setName('living-room.jpeg');
            $realisation->setCategory($this->getReference('category_2'));
            $manager->persist($realisation);
            $this->addReference('realisation_' . $i, $realisation);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [CategoryFixtures::class];
    }
}