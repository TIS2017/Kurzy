<?php
/**
 * Created by PhpStorm.
 * User: misko
 * Date: 24.1.2018
 * Time: 11:52
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class AppFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 10 users
        for ($i = 0; $i < 2; $i++) {
            $user = new User();
            $user->setLogin('user '.$i);
            $user->setPassword( 'pass '.$i);

            $manager->persist($user);
        }

        $manager->flush();
    }

}