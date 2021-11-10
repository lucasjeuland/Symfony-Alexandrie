<?php

namespace App\DataFixtures;

use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        date_default_timezone_set('Europe/Paris');

        $customer = new User();
        $customer->setUsername('Customer_JohnDoe')
            ->setEmail('john.doe@gmail.com')
            ->setPasswordHash('hashTest')
            ->setUserType('customer')
            ->setCreatedAt(new DateTime());

        $admin = new User();
        $admin->setUsername('Admin_JaneDoe')
            ->setEmail('jane.doe@gmail.com')
            ->setPasswordHash('hashTest2')
            ->setUserType('admin')
            ->setCreatedAt(new DateTime());

        $manager->persist($admin);
        $manager->persist($customer);

        $manager->flush();
    }
}