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

    private function seedRoles(ObjectManager $manager) {
        //create user-roles
        $roles = array("ROLE_USER", "ROLE_SUPERVISOR", "ROLE_MASTER", "ROLE_SUBADMIN", "ROLE_ADMIN");
        for ($i = 0; $i < 5; $i++) {
            $role = new Role();
            $role->setName($roles[$i]);

            $this->addReference('role'.$i, $role);

            $manager->persist($role);
        }
    }

    private function seedUsers(ObjectManager $manager){
        // create 20 users
        for ($i = 1; $i <= 20; $i++) {
            $user = new User();
            $user->setLogin('user' . $i);
            $pass = 'pass' . $i;
            $user->setPassword(password_hash($pass, PASSWORD_DEFAULT));
            $user->setRole($this->getReference('role'.random_int(0, 4)));

            $this->addReference('user'.$i, $user);  //set reference for this user

            $manager->persist($user);
        }
    }

    private function seedEmails(ObjectManager $manager){
        //create 20 emails
        for ($i = 1; $i <= 20; $i++) {
            $email = new Email();
            $email->setEmail('user' . $i . '@domain.com');
            $email->setUser($this->getReference('user'.$i));    //get reference of user
            ($this->getReference('user'.$i))->setSelectedEmail($email);

            $manager->persist($email);
        }
    }

    private function seedWorkplaces(ObjectManager $manager){
        //create 12 workplaces
        for ($i = -1; $i <= 10; $i++) {
            $workplace = new Workplace();
            if ($i == -1 || $i == 0) {   //vytvor Univerzitu UK a Fakultu FMFI
                if ($i == -1){
                    $name = 'Univerzita Komenskeho';
                    $this->addReference('UK', $workplace);
                    $parent = null;
                } else {
                    $name = 'Fakulta Matematiky,Fyziky a Informatiky';
                    $this->addReference('FMFI', $workplace);
                    $parent = $this->getReference('UK');
                }
                $workplace->setName($name);
                $workplace->setParent($parent);       //TODO parent je integer bez vazby
            } else {
                $workplace->setName('workplace' . $i);
                $workplace->setParent($this->getReference('FMFI'));

                $this->addReference('workplace' . $i, $workplace);
                //TODO ostatne vazby
            }
            $manager->persist($workplace);
        }
    }

    private function seedPlaces(ObjectManager $manager){
        //create 10 places
        for ($i = 1; $i <= 10; $i++) {
            $place = new Place();
            $place->setName('place'.$i);
            $now = new \DateTime("now");
            $place->setCreated($now);
            $place->setUpdated($now);
            $place->setDeleted(false);
            $place->setWorkplace($this->getReference('workplace'.$i));

            $this->addReference('place'.$i, $place);

            $manager->persist($place);
        }
    }

    private function seedCourseTypes(ObjectManager $manager){
        //create 10 course types
        for ($i = 1; $i <= 10; $i++) {
            $courseType = new CourseType();
            $courseType->setName('course type '.$i);
            $courseType->setDescription('Course description number '.$i);
            if ($i == 4 || $i == 5 || $i == 6){     // 4, 5, 6 viditelne kvoli prerekvizitam
                $visibility = true;
            } else {
                $visibility = rand(0,1)==1;
            }
            $courseType->setVisibility($visibility);
            $courseType->setDeleted(false);
            $courseType->setGarantId($this->getReference('user'.$i));

            $this->addReference('courseType'.$i ,$courseType);

            $manager->persist($courseType);
        }
    }

    private function seedCourseInstances(ObjectManager $manager){
        //create 10 course instances
        for ($i = 1; $i <= 10; $i++) {
            $courseInstance = new CourseInstance();
            $courseInstance->setTimeStamp(new \DateTime("now"));
            $courseInstance->setPlace($this->getReference('place'.$i));
            $courseInstance->setCapacity(random_int(10, 50));
            $courseInstance->setCourseType($this->getReference('courseType'.$i));
            $courseInstance->setSupervisor($this->getReference('user'.$i));
            $courseInstance->setDisenrollDate(new \DateTime("now"));

            $this->addReference('courseInstance'.$i, $courseInstance);

            $manager->persist($courseInstance);
        }
    }

    private function seedEnrolled(ObjectManager $manager){
        //create 10 enrolleds
        for ($i = 1; $i <= 10; $i++) {
            $enrolled = new Enrolled();
            $enrolled->setGraduated(rand(0,1)==1);
            $enrolled->setAttended(rand(0,1)==1);
            $enrolled->setUserId($this->getReference('user'.$i));
            $enrolled->setCourseInstance($this->getReference('courseInstance'.$i));
            $enrolled->setComment('Comment for this enrolled number '.$i);

            $manager->persist($enrolled);
        }
    }

    private function seedCourseSoftPrerequisites(ObjectManager $manager){
        //create 10 Course Soft Prerequisites
        for ($i = 1; $i <= 10; $i++) {
            $courseSoftPrerequisite = new CourseSoftPrerequisite();
            $courseSoftPrerequisite->setCourseType($this->getReference('courseType'.$i));
            $courseSoftPrerequisite->setValue('Prerequisity value number '.$i);

            $manager->persist($courseSoftPrerequisite);
        }
    }

    private function seedCourseHardPrerequisites(ObjectManager $manager){
            $course4 = $this->getReference('courseType4');
            $course5 = $this->getReference('courseType5');
            $course6 = $this->getReference('courseType6');

            $course4->setHardPrerequisites(array($course5,$course6));
            $course5->setHardPrerequisitesOf(array($course4));
            $course6->setHardPrerequisitesOf(array($course4));

            $manager->persist($course4);
            $manager->persist($course5);
            $manager->persist($course6);
    }

    public function load(ObjectManager $manager){
        $this->seedRoles($manager);
        $this->seedUsers($manager);
        $this->seedEmails($manager);
        $this->seedWorkplaces($manager);
        $this->seedPlaces($manager);
        $this->seedCourseTypes($manager);
        $this->seedCourseInstances($manager);
        $this->seedEnrolled($manager);
        $this->seedCourseSoftPrerequisites($manager);
        $this->seedCourseHardPrerequisites($manager);

        $manager->flush();
    }

}