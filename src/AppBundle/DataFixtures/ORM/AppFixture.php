<?php
/**
 * Created by PhpStorm.
 * User: misko
 * Date: 24.1.2018
 * Time: 11:52
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Role;
use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class AppFixture extends Fixture
{

    public function load(ObjectManager $manager)
    {
        //roles
        $roles = array("ROLE_USER", "ROLE_SUPERVISOR", "ROLE_MASTER", "ROLE_SUBADMIN", "ROLE_ADMIN");
        $arrayOfRole = array();
        for ($i = 0; $i < 5; $i++) {
            $role = new Role();
            $role->setName($roles[$i]);

            array_push($arrayOfRole, $role);
            $manager->persist($role);
        }

        // create 10 users
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setLogin('user' . $i);
            $user->setPassword('pass' . $i);

            $user->setRole($arrayOfRole[random_int(0,4)]);

            $manager->persist($user);
        }

        $manager->flush();
    }

}