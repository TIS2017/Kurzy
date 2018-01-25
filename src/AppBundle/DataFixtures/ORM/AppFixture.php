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
use AppBundle\Entity\Email;
use AppBundle\Entity\Workplace;
use AppBundle\Entity\CourseSoftPrerequisite;
use AppBundle\Entity\Enrolled;
use AppBundle\Entity\Place;
use AppBundle\Entity\CourseInstance;
use AppBundle\Entity\CourseType;

use Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;



class AppFixture extends Fixture
{

    public function load(ObjectManager $manager)
    {
        //create user-roles
        $roles = array("ROLE_USER", "ROLE_SUPERVISOR", "ROLE_MASTER", "ROLE_SUBADMIN", "ROLE_ADMIN");
        $arrayOfRole = array();
        for ($i = 0; $i < 5; $i++) {
            $role = new Role();
            $role->setName($roles[$i]);

            array_push($arrayOfRole, $role);
            $manager->persist($role);
        }

        // create 20 users
        for ($i = 1; $i <= 20; $i++) {

            $user = new User();

            $user->setLogin('user' . $i);
            $pass = 'pass' . $i;
            $user->setPassword(password_hash($pass, PASSWORD_DEFAULT));
            $user->setRole($arrayOfRole[random_int(0, 4)]);


            $this->addReference('user'.$i, $user);  //set reference for this user

            $manager->persist($user);

        }

        //create 20 emails
        for ($i = 1; $i <= 20; $i++) {
            $email = new Email();
            $email->setEmail('user' . $i . '@domain.com');
            $email->setUser($this->getReference('user'.$i));    //get reference of user

            //set email to user
            ($this->getReference('user'.$i))->setSelectedEmail($email);

            $manager->persist($email);
        }

//
//        //create 10 workplaces
//        for ($i = 1; $i <= 10; $i++) {
//            $workplace = new Workplace();
//            $workplace->setName('workplace'.$i);
//            $workplace->setParent($i);
//            //TODO ostatne vazby
//
//            $manager->persist($workplace);
//        }
//
//        //create 10 places
//        for ($i = 1; $i <= 10; $i++) {
//            $place = new Place();


        $manager->flush();

    }

}