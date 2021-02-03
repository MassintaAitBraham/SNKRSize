<?php

namespace App\DataFixtures;

use App\Entity\Shoe;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ShoeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $shoe = new Shoe();
        $shoe->setBrand('Nike');
        $shoe->setColor('Blanc');
        $shoe->setSize(43);
        $shoe->setType('Neuve');
        $shoe->setPrice(100);
        $manager->persist($shoe);

        $manager->flush();
    }
}
