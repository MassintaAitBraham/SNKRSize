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
        $shoe->setPicture('https://cdn.radiofrance.fr/s3/cruiser-production/2019/07/3612368d-59e6-4fcf-95f8-f2881d40f2cc/801x410_nikexnintendo64.jpg');
        $manager->persist($shoe);

        $manager->flush();
    }
}
