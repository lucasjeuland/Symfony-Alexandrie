<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        for ($i = 0; $i<3; $i++) {
            $product_1 = new Product();
            $product_1->setName('Le parc Minotti Chair')
                ->setCode('1')
                ->setPrice(169)
                ->setDescription('Ceci est une description, merci de la lire.')
                ->setDimension('21x29x7')
                ->setColor('Taupe');

            $manager->persist($product_1);

            $product_2 = new Product();
            $product_2->setName('DSR Eiffel Chair')
                ->setCode('2')
                ->setPrice(135)
                ->setDescription('Ceci est un article en vente sur le site, achetez-le.')
                ->setDimension('28x43x18')
                ->setColor('Bleu');

            $manager->persist($product_2);

            $product_3 = new Product();
            $product_3->setName('Kichler Pendant Light')
                ->setCode('3')
                ->setPrice(97)
                ->setDescription('Ceci est une autre description, merci de la lire.')
                ->setDimension('3x40x9')
                ->setColor('Rouge');

            $manager->persist($product_3);
        }

        $manager->flush();
    }
}